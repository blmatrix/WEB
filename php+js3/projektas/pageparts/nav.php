<?php
  session_start();

 ?>

<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    

      <?php
        if(isset($_SESSION["name"])){
          echo <<<_START
          <li><a href="index.php">Pagrindinis</a></li>
          <li><a href="expenses.php">Islaidos</a></li>
          <li><a href="about.php">Apie</a></li>
_START;
        }
        else{
          echo <<<_START
          <li><a href="index.php">Pagrindinis</a></li>
          <li><a href="register.php">Registracija</a></li>
          <li><a href="login.php">Prisijungti</a></li>
_START;

        }


       ?>




    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="index.php">Pagrindinis</a></li>
      <li><a href="register.php">Registracija</a></li>
      <li><a href="login.php">Prisijungti</a></li>
      <li><a href="expenses.php">Islaidos</a></li>
      <li><a href="about.php">Apie</a></li>
    </ul>
  </div>
</nav>
