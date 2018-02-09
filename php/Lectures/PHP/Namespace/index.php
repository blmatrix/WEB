<?php
  require_once 'lib/user.php';
  require_once 'lib/data/user.php';

  $user1 = new lib\User("Jonas", "Jonaitis", "jonaitis@gmail.com");
  $user2 = new lib\User("Petras", "Petraitis", "petraitis@gmail.com");

  //

  $userData1 = new lib\data\User();
  $userData1->name = $row["name"];

  //
 ?>
