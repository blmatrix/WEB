<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      print_r($_POST);
      $name = "";
      if(isset($_POST["Name"])){
        $name = $_POST["Name"];
      }

      $surname = "";
      if(isset($_POST["Surname"])){
        $surname = $_POST["Surname"];
      }

      $gender = "";
      if(isset($_POST["Gender"])){
        $gender = $_POST["Gender"];
      }

      if(isset($_POST["Submit"])){
        $fh = fopen($name.".txt", "w");
        fwrite($fh, $name." ".$surname." ".$gender);
        fclose($fh);
      }

      $fh = fopen($name.".txt", "w");
      fwrite($fh, $name." ".$surname." ".$gender);
      fclose($fh);
     ?>

    <fieldset>
    <legend>FORM</legend>
      <form class="" action="index.php" method="post">
        <label>
          Name:
          <input type="text" name="Name">
        </label>
        <label>
          Surname:
          <input type="text" name="Surname">
          <hr />
          <label>
            Who you are?<br /><br />
            <label>Just a Human<input type="radio" name="Gender" value="Human"></label>
            <label>Jedi Master<input type="radio" name="Gender" value="JMaster"></label>
        </label>
        <input type="submit" name="Submit" value="Send">
      </form>
    </fieldset>
  </body>
</html>
