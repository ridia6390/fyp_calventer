<?php
include('php/config.php');

// Fetch events from the calendar database
$sqlEvents = "SELECT * FROM calendar";
$resultEvents = mysqli_query($conn, $sqlEvents);

$events = [];
while ($eventData = mysqli_fetch_array($resultEvents)) {
  // Validate date range
  $startDateTime = strtotime($eventData['event_date'] . ' ' . $eventData['start_time']);
  $endDateTime = strtotime($eventData['event_date'] . ' ' . $eventData['end_time']);

  // Check for invalid date range
  if ($startDateTime === false || $endDateTime === false || $startDateTime >= $endDateTime) {
    // Set empty values for time ranges
    $start_time = '';
    $end_time = '';
  } else {
    // Valid date range, format the time
    $start_time = date('H:i A', $startDateTime);
    $end_time = date('H:i A', $endDateTime);
  }

  // Store events in an array for later use
  $events[] = [
    'id' => $eventData['id'],
    'event_date' => $eventData['event_date'], // Keep the date even if time is invalid 
    'club_name' => $eventData['club_name'],
    'event_title' => $eventData['event_title'],
    'start_time' => $start_time,
    'end_time' => $end_time,
  ];
}
?>