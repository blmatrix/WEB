<?php
  echo "Bele kas"; // konstruktas
  echo "<hr />";
  print("Ką paduosi tą ir išspausdins");
  echo "<hr />";
  printf("Šiandien yra %x m. %s %d d.", 2018, "sausio", 31);
  echo "<hr />";
  printf("Man yra %x metai. Aišku šešioliktainėje skaičiavimo sistemoje.", 36);
  echo "<hr />";

  printf("Spalva %x%x%x", 106, 198, 57);

  echo "<hr />";

  printf("Skaičius %.3f", 10); // void
  echo "<hr />";
  $skaicius = sprintf("Skaičius %.3f", 10); // grąžinanti
  echo $skaicius;
 ?>
