<?php

require_once('require.php');
if(isset($_POST['a']) and isset($_POST['coords']) and 
   $_POST['coords'] != null and $_POST['coords'] != "" and $_POST['coords'][0] != ""){
  //var_dump($_POST['coords']);
  $action = $_POST['a'];
  switch($action){
    case "html":
      return htmlProc();
    case "csv";
      return csvProc();
    case "file":
      return fileProc();
  }
}


function htmlProc(){
  $html_coo = new CoordHTML($_POST['coords']);
  echo $html_coo->renderFormat();
}

function csvProc(){
  $csv_coo = new CoordCSV($_POST['coords']);
  echo $csv_coo->renderFormat();
}

function fileProc(){
  $csv_coo = new CoordCSV($_POST['coords']);
  $file = fopen('php://memory', 'w');
  fwrite($file, $csv_coo->renderFormat());
  fseek($file, 0);
  header('Content-type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename="coords.csv"');
  header("Content-Transfer-Encoding: binary"); 
  header("Pragma: no-cache"); 
  header("Expires: 0");
  fpassthru($file);
  fclose($file);
  
  /*@header("Last-Modified: " . @gmdate("D, d M Y H:i:s",$_GET['timestamp']) . " GMT");
  @header("Content-type: text/x-csv");
  
  header("Content-Disposition: attachment; filename=coords.csv");
  echo $csv_coo->renderFormat();
  exit();*/
}