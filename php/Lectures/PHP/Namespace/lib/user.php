<?php
  namespace lib;
  class User {
    private $name, $surname, $email;

    function __construct(
      $name,
      $surname,
      $email) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }
  }


 ?>
