<?php
  //create_file_hello("isspausink man teksta");
  //get_line_form_file();
  get_all_lines_from_file();

  function create_file_hello($arg){
    $fh = fopen("tekstas.txt", "w");
    fwrite($fh, $arg) or die("Sorry nepavyko!");
    fclose($fh);
    echo "Done";
  }

  function get_line_form_file(){
    $fh = fopen("tekstas.txt", "r");
    $line = fgets($fh);
    fclose($fh);
    echo $line;
  }

  function get_all_lines_from_file(){
    $fh = fopen("daugiauteksto.txt", "r");
    while (!feof($fh)) { // kol ne failo pabaiga
      $line = fgets($fh);
      echo $line."<br />";
    }
    fclose($fh);
  }

 ?>
