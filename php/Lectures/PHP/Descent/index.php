<?php
  require_once 'lib/animal.php';
  require_once 'lib/human.php';
  require_once 'lib/student.php';
  require_once 'lib/dog.php';

  $animal1 = new Animal (2, 2);

  $human1 = new Human (2, 2, "Lithuanian");

  $student1 = new Student (
      2,
      2,
      "Lithuanian",
      FALSE,
      "VGTU",
      "Development",
      array("Math", "Biology"));

  echo $student1->get_description();
  echo "<br />";

  $dog1 = new Dog (2, 4, TRUE);

  echo "<pre>";
    print_r($dog1);
  echo "</pre>";


 ?>
