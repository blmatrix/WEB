<?php
  session_start(); // sesijos pradzia yra privaloma faile kai naudojamas $_SESSION
  $realusername = "admin";
  $realpassword = "admin123";
  if(isset($_POST["username"]) && isset($_POST["password"])){

    if($_POST["username"] == $realusername
      && $_POST["password"] == $realpassword){

      $_SESSION["fullname"] = "Administratorius";

      header("Location: index.php");
    }
  }
 ?>
