<?php
  $dog1 = new Dog("Pranius");
  $dog2 = new Dog("Brisius");
  $dog3 = new Dog("Reksas");

  echo $dog2->get_description();
  echo Dog::get_counter();

class Dog{
  const NAME = "Šuo"; // konstanta kai turime nekintamą reikšmę
  private $type, $legs, $realname;

  private static $counter = 0;

  function __construct($rname){
    $this->type = "Šiltakraujis";
    $this->legs = 4;
    $this->realname = $rname;

    self::$counter++;
  }

  public static function get_counter(){
    return self::$counter;
  }


  public function get_description(){
    return "<h1>Vardas: ".$this->realname." Pavadinimas: ".self::NAME.", tipas: ".$this->type.", kojų skaičius: ".$this->legs."</h1>";
  }

  function __destruct(){
    // išlaisvinam atmintį jei reikia
  }
}

 ?>
