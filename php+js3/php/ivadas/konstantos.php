<?php
  define("PI", 3.14);
  $apskr_ilgis = 2*PI*5;
  echo $apskr_ilgis." mm.";

  define("VISI_PAVEIKSLIUKAI", "/images/");

  echo VISI_PAVEIKSLIUKAI;

  echo __FILE__."<hr />";
  echo __DIR__."<hr />";
  echo __LINE__."<hr />";
  
  get_date_and_time();

  function get_date_and_time(){
    echo __FUNCTION__."<hr />";
    return date("Y-m-d H:i:s");
  }
 ?>
