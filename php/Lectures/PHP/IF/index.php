<?php
  // 1 - red
  // 2 - green
  // 3 - yellow

  $color = get_traffic_light1(1);
  echo "<input style=\"background-color:$color\" />";
  echo "<br />";

  $color = get_traffic_light2(3);
  echo "<input style=\"background-color:$color\" />";
  echo "<br />";

  $color = get_traffic_light3(2);
  echo "<input style=\"background-color:$color\" />";

  function get_traffic_light1($code){
    if($code == 1){
      return "red";
    }
    elseif($code == 2){
      return "green";
    }
    else{
      return "yellow";
    }
  }

  function get_traffic_light2($code){
    switch ($code) {
      case 1:
        return "red";
        break;
      case 2:
        return "green";
        break;
      case 3:
        return "yellow";
        break;
    }
  }

  function get_traffic_light3($code){
    return $code == 1 ? "red" : "green";
  }

 ?>
