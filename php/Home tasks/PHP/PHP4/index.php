<?php

  /**
  * Parašykite skriptą, kuris atspausdintų šios dienos datą ir savaitės dieną.
  */

  $result = setlocale(LC_ALL, 'fr_FR');

if($result === false){
    throw new \RuntimeException(
        'Got error changing locale, check if locale is installed on the system'
    );
}

$dayOfMonth = '%e';
//if it is Windows we will use %#d as %e is not supported
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
   $dayOfMonth = '%#d';
}

//Mar 25 Aoû 09 - month shortname, day of month, day shortname, year last two digits
echo strftime("%b $dayOfMonth %a %y");
  }
 ?>
