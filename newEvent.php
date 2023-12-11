<?php
// date_default_timezone_set("America/Bogota");
// setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("php/config.php");
$event             = ucwords($_REQUEST['event']);
$d_start           = $_REQUEST['start_date'];
$start_date        = date('Y-m-d', strtotime($d_start)); 

$d_end             = $_REQUEST['end_date']; 
$set_final_date  = date('Y-m-d', strtotime($d_end));  
$end_date1         = strtotime($set_final_date."+ 1 days");
$end_date          = date('Y-m-d', ($end_date1));  
$color_event      = $_REQUEST['color_event'];


$InsertNewEvent = "INSERT INTO calendar(
      event,
      start_date,
      end_date,
      color_event
      )
    VALUES (
      '" .$event. "',
      '" .$start_date."',
      '" .$end_date. "',
      '" .$color_event. "'
  )";
$resultadoNewEvent = mysqli_query($conn, $InsertNewEvent);

header("Location:calendar.php?e=1");

?>