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
