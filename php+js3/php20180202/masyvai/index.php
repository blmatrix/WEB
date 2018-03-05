<?php
  // paprastas priskyrimas
  $prekes[] = "Obuoliai";
  $prekes[] = "Bananai";
  $prekes[] = "Vynuogės";

  echo $prekes[1];
  echo "<hr />";
  print_r($prekes);


  // masyvo funkcija
  echo "<hr />";
  $passenger_types = array("Suaugęs", "Paauglys", "Vaikas", "Kūdikis");
  echo $passenger_types[2];

  echo "<hr />";
  // asociatyviniai masyvai
  $passenger_types2 = array("adt" => "Suaugęs", "teen" => "Paauglys", "chd" => "Vaikas", "inf" => "Kūdikis");
  echo $passenger_types2["chd"];

  echo "<hr />";
  echo "<pre>";
    print_r($passenger_types2);
  echo "</pre>";




 ?>
