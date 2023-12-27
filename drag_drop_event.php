<?php
// date_default_timezone_set("America/Bogota");
// setlocale(LC_ALL,"es_ES");

include('php/config.php');
                        
$idEvent    = $_POST['idEvent'];
$start      = $_POST['start'];
$end        = $_POST['end']; 

$event_date = date('Y-m-d H:i:s', strtotime($start));

$UpdateProd = "UPDATE calendar 
    SET 
        event_date = '$event_date'
    WHERE id = '$idEvent'";

$result = mysqli_query($conn, $UpdateProd);

// Check if the query executed successfully
if ($result) {
    echo "Event updated successfully";
} else {
    echo "Error updating event: " . mysqli_error($conn);
}

// Close the database connection (if necessary)
mysqli_close($conn);
?>
