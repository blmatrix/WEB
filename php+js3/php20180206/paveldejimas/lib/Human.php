<?php
  class Human extends Animal{
    private $language;

    function __construct($eyes, $legs, $language){
      parent::__construct($eyes, $legs); // perduodam argumentu reiksmes tevinei klasei
      $this->language = $language;
    }

    protected function get_language(){
      return $this->language;
    }
  }

 ?>
