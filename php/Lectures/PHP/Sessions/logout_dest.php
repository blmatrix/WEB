<?php
  session_start();
  unset($_SESSION["fullname"]);
  // galima ir session_destroy
  header("Location: index.php");
 ?>
