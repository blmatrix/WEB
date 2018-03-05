<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!--  -->
  <body>

    <?php
      /* Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/

      echo "<h1>Sveikas pasauli!</h1>";

      $x = 5; // tipas number
      $y = 10; // tipas number
      $tekstas = "Šiandien pilnatis"; // tipas string

      echo $x + $y;
      echo "<br />".$tekstas;
      echo $x.$tekstas;
      echo "<br />";

      $x++; // x padidina vienetu
      echo $x + $y;

      $y--; // y sumažina vienetu
      echo "<br />";
      echo $x + $y;
      echo "<br />";
      echo 5%2;

      // priskyrimo operatoriai

      $suma = 0;

      $suma = $x + $y;
      echo "<br />";
      echo "Suma: ".$suma." EUR";

      $suma += 5;

      echo "<br />";
      echo "Suma: ".$suma." EUR";

      echo "<br />";

      $eilute = "Sveiki, ";

      $eilute .= "Jonai!";

      echo $eilute;
      echo "<br />";
      echo "Prieš tai spausdinau: $eilute";

      echo "<br />";
      echo 'Prieš tai spausdinau: '.$eilute;
      echo "<br />";
      echo "Ar skaitei knygą \"Kauliukų žmogus\"?"; // escaping characters

      echo "<br />";
      echo 'Ar skaitei knygą "Kauliukų žmogus"?';

      echo "<a href=\"http://www.vilnius.lt\">Vilnius</a>";

      echo <<<_MANO

      <h1>tekstas</h1>
      <h2>tekstas</h2>
      <h3>tekstas</h3>
_MANO;
      echo "<br />";

     ?>
  </body>
</html>
