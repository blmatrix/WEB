<?php

  $x = 10;
  $y = 5;

  if(!file_exists("failas.txt")){
    echo "Sorry, file does not exist!";
  }


  if(!($x < 10 || $y < 10)){
    echo "$x ir $y yra mažesnis už 10";
    // jeigu tiesa
  }
  else{
    // jeigu netiesa
    echo "$x ir $y nėra mažesnis už 10";
  }

  echo "<br />";

  echo get_passenger_type(5);

  function get_passenger_type($amzius){
    if($amzius >= 18){
      return "Adult";
    }
    elseif($amzius >= 1){
      return "Child";
    }
    else{
      return "Infant";
    }
  }


 ?>
