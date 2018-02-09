<?php
  session_start();
  $realusername = "admin";
  $realpassword = "admin123";
  if(isset($_POST["username"]) and isset($_POST["password"])){

    if($_POST["username"] == $realusername
      and $_POST["password"] == $realpassword){

      $_SESSION["fullname"] = "Administratorius";

      header("Location: index.php");
    }
  }
 ?>
