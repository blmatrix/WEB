<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div>
        <h1>My page</h1>
        <?php
          session_start();
          if(isset($_SESSION["fullname"])){
            echo "Sveikas, ".$_SESSION["fullname"];
          }
         ?>
      </div>
    </header>

    <nav>
      <div>
        <ul>
          <li><a href="index.php">Main page</a></li>
          <?php
            if(isset($_SESSION["fullname"])){
              echo <<<_START
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="logout.php">Logout</a></li>
_START;
            }
            else {
              echo <<<_START
              <li><a href="login.php">Login</a></li>
_START;
            }
           ?>
        </ul>
      </div>
    </nav>

    <section>
      <div>
        <h1>Random text</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    <footer>
      <div>
        <p>Random text</p>
      </div>
    </footer>

  </body>
</html>
