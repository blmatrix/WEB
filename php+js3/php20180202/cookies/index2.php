<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      
    <?php
      if(isset($_COOKIE["fullname"])){
        echo $_COOKIE["fullname"];
      }
    ?>

    </h1>
  </body>
</html>
