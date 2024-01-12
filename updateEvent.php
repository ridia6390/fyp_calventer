<?php
require("php/config.php");

$idEvent = $_POST['idEvent'];
$event_title = ucwords($_POST['event_title']);
$club_name = $_POST['club_name']; 
$event_date = $_POST['event_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$color_event = $_POST['color_event'];

$start_datetime = date('Y-m-d H:i:s', strtotime("$event_date $start_time"));
$end_datetime   = date('Y-m-d H:i:s', strtotime("$event_date $end_time"));

$UpdateProd = "UPDATE calendar 
    SET 
        club_name = '$club_name',
        event_title = '$event_title',
        event_date = '$event_date',
        start_time = '$start_datetime',
        end_time = '$end_datetime',
        color_event = '$color_event'
    WHERE id = '$idEvent'";

$result = mysqli_query($conn, $UpdateProd);

header("Location:adminCalendar2.php?ea=1");
?>

