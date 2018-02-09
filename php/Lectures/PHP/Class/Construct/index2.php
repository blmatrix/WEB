<?php
  $dog1 = new Dog("Rex");
  $dog2 = new Dog("Moppo");
  $dog3 = new Dog("Gek");

  echo $dog2->get_description();
  echo "<br />";
  echo Dog::get_counter();


  class Dog{
    const NAME = "Dog";
    private $name, $type, $legs, $realname;

    private static $counter = 0; // private: so nobody could affect static parameter

    public function __construct($rname){
      $this->name = "Dog";
      $this->type = "Sweaty";
      $this->legs = 4;
      $this->realname = $rname;
      self::$counter++;
    }

    public static function get_counter(){
      return self::$counter++;
    }

    public function get_description(){
      return "<b>Realname: </b>".$this->realname." | "."Name: ".self::NAME." / "."Type: ".$this->type." / "."Legs number: ".$this->legs;
    }

    public function __destruct(){
      // release server memmory
    }
  }
 ?>
