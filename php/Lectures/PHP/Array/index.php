<?php

  // simple assigment
  $massive[] = "Note1";
  $massive[] = "Note2";
  $massive[] = "Note3";

  print_r ($massive);
  echo "<hr />";
  echo $massive[1];

  // massive function
  $passenger_type = array("Note1", "Note2", "Note3");
  echo "<hr />";
  echo $passenger_type[1];

  // associative massive
  $passenger_type2 = array("Note1" => "1", "Note2" => 2, "Note3" => 3);
  echo "<hr />";
  echo $passenger_type2["Note1"];

  echo "<pre>";
    print_r ($passenger_type2);
  echo "</pre>";

 ?>
