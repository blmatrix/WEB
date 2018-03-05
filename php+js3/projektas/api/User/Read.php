<?php
  session_start();
  require_once "loader.php";
  $userService = new UserService();

  $user = get_user($_POST);

  $database_user = $userService->read($form_user->username);

  if($database_user == null){
    $response = new Response(1, "Nera tokio vartotojo", null);
    echo json_encode($response);
  }

  if($database_user->password == $form_user->password){
    //echo json_encode($database_user);
    $_SESSION["name"] = $database_user->name;
    $_SESSION["surname"] = $database_user->surname;
    header("Location: index.php");
  }
  exit(0);

  function get_user($post){

    if(!isset($post["username"])){
      return null;
    }

    if(!isset($post["password"])){
      return null;
    }

    return new User(
      null,
      null,
      $post["username"],
      $post["password"],
      null
    );
  }

 ?>
