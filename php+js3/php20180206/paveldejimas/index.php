<?php
  require_once 'lib\Animal.php';
  require_once 'lib\Human.php';
  require_once 'lib\Student.php';

  $human1 = new Student(2, 2, "lietuvių", FALSE, "VU", "Matematika", array("Chemija"));
  echo $human1->get_description();
  echo "<pre>";
  print_r($human1);
  echo "</pre>";

 ?>
