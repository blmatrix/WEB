<?php

  /*
  Kavos aparatas priima kodą. t.y. vieną skaičių 1 - kavai, 2 - latte, 3 - juodai kavai, 4 - cappuchino. Jeigu pateikiamas skaičius neišvardintas šiame sąraše kavos aparatas įpila karšto vandens. Parašykite funkciją, kuri pagal pateiktą skaičių įpiltų jums atitinkamo gėrimo (išspausdintų koks tai gėrimas).
  */

  $coffee_time = get_coffee1(2);
  echo "Stai jusu ".$coffee_time;

  function get_coffee1($button_number) {
    if ($button_number == 1) {
      return "kava";
    }
    if ($button_number == 2) {
      return "latte";
    }
    if ($button_number == 3) {
      return "juoda kava";
    }
    if ($button_number == 4) {
      return "cappuchino";
    }
    else {
      return "karstas vanduo";
    }
  }

  /*
  function get_coffee2($button_number) {
    switch ($button_number) {
      case 1:
        return "kava";
        break;
      case 2:
        return "latte";
        break;
      case 3:
        return "juoda kava";
        break;
      case 4:
        return "cappuchino";
        break;
    }
  }
  */

  /*
  function get_coffee3($button_number) {
    return $button_number == 1 ? "kava" : "latte";
  }
  */
 ?>
