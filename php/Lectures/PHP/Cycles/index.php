<?php
  //create_test_file("Hello World!");
  //get_line_from_file();
  get_all_lines_from_file();

  function create_test_file($arg){
    $fh = fopen("test.txt", "w");
    fwrite($fh, $arg) or die("Unexpected issue");
    fclose($fh);
    echo "Done";
  }

  function get_line_from_file(){
    $fh = fopen("test.txt", "r");
    $line = fgets($fh);
    fclose($fh);
    echo $line;
  }

  function get_all_lines_from_file(){
    $fh = fopen("new_text.txt", "r");
    while (!feof($fh)) { // while not file end
      $line = fgets($fh);
      echo $line."<br />";
    }
    fclose($fh);
  }

 ?>
