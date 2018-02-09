<?php

  $dog1 = new Dog();
  $dog1->realname = "Rex";

  $dog2 = new Dog();
  $dog2->realname = "Bithoven";

  $dog3 = new Dog();
  $dog3->realname = "Moppo";

  $dog4 = new Dog();
  $dog4->realname = "Gek";

  echo "Registered dogs: ".Dog::get_counter(); // or $counter;
  echo "<hr />";
  echo $dog4->get_description();

  class Dog{
    public $name, $type, $legs, $realname;

    private static $counter = 0; // private: so nobody could affect static parameter

    public function __construct(){
      $this->name = "Poppy";
      $this->type = "Sweaty";
      $this->legs = 4;
      self::$counter++;
    }

    public static function get_counter(){
      return self::$counter++;
    }

    public function get_description(){
      return "<b>Realname: </b>".$this->realname." | "."Name: ".$this->name." / "."Type: ".$this->type." / "."Legs number: ".$this->legs;
    }

    public function __destruct(){
      // release server memmory
    }
  }

 ?>
