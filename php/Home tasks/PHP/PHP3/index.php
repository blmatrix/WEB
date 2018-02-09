<?php

  function get_fruits($array, $header) {
    echo $header."<br /><ul>";
    foreach ($array as $key) {
      echo "<li>".$key."</li>";
    }
    echo "</ul>";
  }

  $array = ['1','2','3','4'];
  $header = "Vaisiu sarasas";
  get_fruits($array, $header);

 ?>
