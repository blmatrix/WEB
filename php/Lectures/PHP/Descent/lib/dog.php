<?php
  class Dog extends Animal {
    private $tail;

    function __construct($eyes, $legs, $tail) {
      parent::__construct($eyes, $legs);
      $this->tail = $tail;
    }

    protected function get_tail() {
      return $this->tail;
    }
  }


 ?>
