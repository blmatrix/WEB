<?php

 require_once("..//iOperations.php");
 require_once("..//Response.php");

 class UserService implements iOperations
  {
    function __construct()
    {
      # code...
    }

    public function create($user)
    {
      if($user == null){
        $response = new Response(3, "User parameter null", null);
        return json_encode($response);
      }

      $conn = ConnectionFactory::GetConnection();

      if($conn == null){
        $response = new Response(4, "connection = null", null);
        return json_encode($response);
      }

      if($stmt = $conn->prepare("INSERT INTO users (username, password, name, surname, birthday, created, updated) VALUES (?, ?, ?, ?, ?, NOW(), NOW())")){

        $stmt->bind_param("sssss",
          $username,
          $password,
          $name,
          $surname,
          $birthday
        );

        $username = $user->username;
        $password = $user->password;
        $name = $user->name;
        $surname = $user->surname;
        $birthday = $user->birthday;

        if($stmt->execute()){
          $response = new Response(0, "OK", null);
          return json_encode($response);
        }
        else{
          $response = new Response(1, "Problemos paleidžiant skriptą", null);
          return json_encode($response);
        }
      }
      else{
        $response = new Response(2, "MySQL sintaksės klaida", null);
        return json_encode($response);
      }
    }

    public function read($username=null)
    {
      if($username == null){
        //TODO: grazinti visa sarasa vartotoju
      }
      else{
        return get_user($username);
      }
    }

    private function get_user($username)
    {
      if($stmt->prepare("SELECT name, surname, username, birthday, password FROM users WHERE username=?")){

        $stmt->bind_param("s", $username);

        if($stmt->execute()){
          $stmt->bind_result($name, $surname, $username, $birthday, $password);

          $stmt->fetch();

          return new User($name, $surname, $username, $birthday, $password);
        }
        else{
          return null;
        }
      }
    }

    public function update($user)
    {
      # code...prisijungimo prie db logika ir atnaujinimas
    }

    public function delete($username)
    {
      # code...prisijungimo prie db logika ir panaikinimas
    }

  }

 ?>
