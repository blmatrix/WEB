<?php

  /*
  Parašykite fukciją kuri išspausdina jūsų amžių pagal tai kokius metus tai funkcijai paduodate.
  */

  echo get_age(1992);

  function get_age($birth_year) {
    $current_year = time() / (60 * 60 * 24 * 365) + 1970;
    $age = $current_year - $birth_year;
      return "Jusu gimimo metai yra ".$birth_year.". Jums dabar arba siais metais bus ".round($age).".";
  }
 ?>
