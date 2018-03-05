<?php
  $dog = new Animal();
  // prieiname prie objekto savybiu is isores
  $dog->name = "Šuo";
  $dog->type = "Šiltakraujis";
  $dog->legs = 4;
  $dog->eyes = 2;
  $dog->gender = "male";

  echo $dog->get_description();

   $cat = new Animal();

   $cat->name = "Katė";
   $cat->type = "Šiltakraujis";
   $cat->legs = 4;
   $cat->eyes = 2;
   $cat->gender = "female";

   echo $cat->get_description();

  class Animal{
    public $name, $type, $legs, $eyes, $gender;

    function get_description(){
      return "<h1>Pavadinimas: ".$this->name.", tipas: ".$this->type.", kojų skaičius: ".$this->legs.", akių skaičius: ".$this->eyes.", lytis: ".$this->gender."</h1>";
    }
  }

 ?>
