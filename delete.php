<?php
include "db_conn.php";

$id = $_GET["id"];

// Deleting from calendar table
$sql_calendar = "DELETE FROM `calendar` WHERE id = $id";
$result_calendar = mysqli_query($conn, $sql_calendar);

// Deleting from events table
$sql_events = "DELETE FROM `events` WHERE id = $id";
$result_events = mysqli_query($conn, $sql_events);

if ($result_calendar && $result_events) {
  header("Location: adminEvents2.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

