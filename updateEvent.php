<?php
// date_default_timezone_set("America/Bogota");
// setlocale(LC_ALL,"es_ES");

include('php/config.php');
                        
$idEvent        = $_POST['idEvent'];

$event            = ucwords($_REQUEST['event']);
$d_start          = $_REQUEST['start_date'];
$start_date        = date('Y-m-d', strtotime($d_start)); 

$d_end            = $_REQUEST['end_date']; 
$set_final_date = date('Y-m-d', strtotime($d_end));  
$end_date1         = strtotime($set_final_date."+ 1 days");
$end_date          = date('Y-m-d', ($end_date1));  
$color_event      = $_REQUEST['color_event'];

$UpdateProd = ("UPDATE calendar 
    SET event ='$event',
        start_date ='$start_date',
        end_date ='$end_date',
        color_event ='$color_event'
    WHERE id='".$idEvent."' ");
$result = mysqli_query($conn, $UpdateProd);

header("Location:calendar.php?ea=1");
?>