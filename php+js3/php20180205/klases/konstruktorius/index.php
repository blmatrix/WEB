<?php

  $dog1 = new Dog();
  $dog1->realname = "Brisius";

  $dog2 = new Dog();
  $dog2->realname = "Reksas";

  $dog3 = new Dog();
  $dog3->realname = "Pranas";

  //Dog::$counter = 10; tik jei public galima priskirti tiesiogiai

  $dog4 = new Dog();
  $dog4->realname = "Paksius";

  echo "Užregitruota šunų: ".Dog::get_counter();
  echo "<hr />";
  echo $dog4->get_description();

  class Dog{
    public $name, $type, $legs, $realname;

    private static $counter = 0;

    function __construct(){
      $this->name = "Šuo";
      $this->type = "Šiltakraujis";
      $this->legs = 4;
      self::$counter++;
    }

    public static function get_counter(){
      return self::$counter;
    }


    public function get_description(){
      return "<h1>Vardas: ".$this->realname." Pavadinimas: ".$this->name.", tipas: ".$this->type.", kojų skaičius: ".$this->legs."</h1>";
    }

    function __destruct(){
      // išlaisvinam atmintį jei reikia
    }
  }

 ?>
