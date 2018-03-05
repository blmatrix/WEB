<?php
  require_once "loader.php";

  $userService = new UserService();

  $name = $_POST["username"];








  $user=get_user($_POST); // perduodam asociatyvini masyva
  echo $userService->create($user);
  exit(0);

  function get_user($post)
  {
    if(!isset($post["username"])){
      return null;
    }
    if(!isset($post["password"])){
      return null;
    }
    if(!isset($post["name"])){
      return null;
    }
    if(!isset($post["surname"])){
      return null;
    }
    if(!isset($post["birthday"])){
      return null;
    }

    return new User(
      $post["name"],
      $post["surname"],
      $post["username"],
      $post["password"],
      $post["birthday"]
    );
  }

 ?>
