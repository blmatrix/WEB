<?php
  session_start();
  if(isset($_POST["username"]) and isset($_POST["password"])){

    if($_POST["username"] == $realusername
      and $_POST["password"] == $realpassword){
      }
    }

  session_destroy();
  header("Location: index.php");
 ?>
