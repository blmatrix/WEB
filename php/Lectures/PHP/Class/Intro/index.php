<?php
  $animal_1 = new Animal();
  $animal_1 ->name = "Dog";
  $animal_1 ->type = "Predator";
  $animal_1 ->legs = 4;
  $animal_1 ->eyes = 2;
  $animal_1 ->gender = "Female";

  $animal_2 = new Animal();
  $animal_2 ->name = "Cat";
  $animal_2 ->type = "Predator";
  $animal_2 ->legs = 4;
  $animal_2 ->eyes = 2;
  $animal_2 ->gender = "Male";

  echo "<pre>";
    print_r($animal_1);
  echo "</pre>";

  echo $animal_1->get_description();
  echo "<br />";
  echo $animal_2->get_description();

  class Animal{
    public $name, $type, $legs, $eyes, $gender;

    function get_description(){
      return "Name: ".$this->name." / "."Type: ".$this->type." / "."Legs number: ".$this->legs." / "."Eyes number: ".$this->eyes." / "."Lytis: ".$this->gender;
    }
  }

 ?>
