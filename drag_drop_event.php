<?php
// date_default_timezone_set("America/Bogota");
// setlocale(LC_ALL,"es_ES");

include('php/config.php');
                        
$idEvent         = $_POST['idEvent'];
$start            = $_REQUEST['start'];
$start_date       = date('Y-m-d', strtotime($start)); 
$end              = $_REQUEST['end']; 
$end_date        = date('Y-m-d', strtotime($end));  


$UpdateProd = ("UPDATE calendar 
    SET 
        start_date ='$start_date',
        end_date ='$end_date'

    WHERE id='".$idEvent."' ");
$result = mysqli_query($conn, $UpdateProd);

?>