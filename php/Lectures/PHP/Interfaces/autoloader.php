<?php
  spl_autoload_register(
    function($class_name) {
      require_once "lib/".strtolower($class_name).".php";
    }
  );

 ?>
