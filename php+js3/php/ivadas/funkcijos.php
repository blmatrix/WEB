<?php
  $suma1 = skaiciuok_suma(5, 15);
  echo $suma1."<br />";

  $suma2 = skaiciuok_suma(287, 489);
  echo $suma2."<br />";

  $daugyba = skaiciuok_daugyba(478, 15);
  echo "<br />";
  echo $daugyba."<--- čia nieko nėra<br />";
  
  // grąžinančios
  function skaiciuok_suma($x, $y){
    $tekstas = "Suma: ";
    $suma = $x + $y;
    $galutinis = $tekstas.$suma;
    return $galutinis;
  }

  // void funkcija
  function skaiciuok_daugyba($x, $y){
    $daugyba = $x*$y;
    echo "Daugyba $x ir $y yra $daugyba";
  }

 ?>
