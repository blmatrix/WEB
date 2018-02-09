<?php

  /*
  Paveikslėlyje #1 ($student1 = new Student("Jonas", "Jonaitis", 24, "PHP+Javascript");) nurodytas objekto kūrimas naudojant klasę Student, o paveikslėlyje #2 (Studentas Jonas Jonaitis 24 metu, mokosi pagal "PHP+Javascript" studiju programa.) vaizduojamas rezultatas iškvietus vieną iš klasės metodų. Jums reikia parašyti klasę Student su konstruktoriumi ir metodu. Metodas sugeneruoja ir grąžina tekstą tokį kaip parodyta paveiklėlyje #2.
  */

  $student1 = new Student("Jonas", "Jonaitis", 24, "PHP+Javascript");
  echo $student1->get_student_description();

  class Student {
    private $name, $surname, $age, $study;

    public function __construct($rname, $rsurname, $rage, $rstudy) {
      $this->name = $rname;
      $this->surname = $rsurname;
      $this->age = $rage;
      $this->study = $rstudy;
    }

    public function get_student_description() {
      return "Studentas ".$this->name." ".$this->surname." ".$this->age." metu, mokosi pagal &quot;".$this->study."&quot; studiju programa.";
    }
  }
 ?>
