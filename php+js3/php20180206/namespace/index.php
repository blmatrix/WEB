<?php
  require_once 'lib\User.php';
  require_once 'lib\Data\User.php';

  $user1 = new User("Jonas", "Jonaitis", "jonaitis@gmail.com");
  $user2 = new User("Petras", "Petraitis", "petraitis@gmail.com");

  // Veiksmai duomenims apdoroti ir įterpti į duomenų bazę
  // ....
  // ...

  // duomenų paėmimas iš duomenų bazės
  // ir priskyrimas User objektui

  $userData1 = new lib\Data\User();
  $userData1->name = ";";//$row["name"];
  ///
 ?>
