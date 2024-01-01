<?php
require("php/config.php");

$event_title  = ucwords($_REQUEST['event_title']);
$club_name    = $_REQUEST['club_name'];
$event_date   = $_REQUEST['event_date'];
$start_time   = $_REQUEST['start_time'];
$end_time     = $_REQUEST['end_time'];
$color_event  = $_REQUEST['color_event'];

$start_datetime = date('Y-m-d H:i:s', strtotime("$event_date $start_time"));
$end_datetime   = date('Y-m-d H:i:s', strtotime("$event_date $end_time"));

$InsertNewEvent = "INSERT INTO calendar(
      club_name,
      event_title,
      event_date,
      start_time,
      end_time,
      color_event
      )
    VALUES (
      '" . $club_name . "',
      '" . $event_title . "',
      '" . $event_date . "',
      '" . $start_datetime . "',
      '" . $end_datetime . "',
      '" . $color_event . "'
  )";

$resultadoNewEvent = mysqli_query($conn, $InsertNewEvent);




header("Location:adminCalendar.php?e=1");
?>


