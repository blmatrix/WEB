<?php

/**
 *
 */

namespace Framework;

class Utils
{
  public static function view($path)
  {
    include 'application/resources/views/' . $path;
  }
}



?>
