<?php

/**
 *
 */

namespace App\Controllers;

class LoginController
{
  // actions: show, logout
  public function show()
  {
    $date = date('Y-m-d');

    echo "Show action | ";
    echo 'Today is: ' . $date;
  }

  public function logout()
  {
    phpinfo();
  }
}

?>
