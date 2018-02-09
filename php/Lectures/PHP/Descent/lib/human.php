<?php
  class Human extends Animal {
    private $language;

    function __construct($eyes, $legs, $language) {
      parent::__construct($eyes, $legs); // pushing arguments to the parent Class
      $this->language = $language;
    }

    protected function get_language() {
      return $this->language;
    }
  }

 ?>
