<?php

/**
 *
 */

namespace App\Controllers;

use Framework\Utils;

class PostsController
{
  // action: showAll, showSingle, create
  public function showAll()
  {
    Utils::view('posts/showAll.html');
  }

  public function showSingle()
  {
    Utils::view('posts/showSingle.html');
  }

  public function create()
  {
    Utils::view('posts/create.html');
  }
}

?>
