<?php

  /**
  * Parašykite funkciją, kuri išspausdintų pateiktą sąrašą su pavadinimu. Funkcija turi turėti du argumentus. Pirmas argumentas masyvas, antras argumentas spausdinamo sąrašo antraštė. Iškvietus funkciją rezultatas turi būti maždaus toks koks pateiktas žemiau.
  */

  function get_fruits($array, $header) {
    echo $header."<ul>";
    foreach ($array as $key) {
      echo "<li>".$key."</li>";
    }
    echo "</ul>";
  }

  $array = ['"Obuoliai"','"Bananai"','"Kriauses"','"Apelsinai"','"Mandarinai"'];
  $header = "<h1>Vaisiu sarasas</h1>";
  get_fruits($array, $header);

 ?>
