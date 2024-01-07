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


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="style/adminEvents.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title> Admin Events</title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="adminHome1.php">Home</a>
      <a href="adminCalendar1.php">Calender</a>
      <a href="adminEvents1.php" class="events-active">Events</a>
      <a href="adminAbout1.php">About</a>
      <a href="adminContact1.php">Contact</a>
    </nav>

    <button class="btn" onclick="navigateToLoginPage()"> LOGIN </button>

  </header>
</head>

<body>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Event Date</th>
          <th scope="col">Club Name</th>
          <th scope="col">Event Title</th>
          <th scope="col">Start Time</th>
          <th scope="col">End Time</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($events as $event): ?>
          <tr>
            <td>
              <?php echo $event['event_date'] ?>
            </td>
            <td>
              <?php echo $event['club_name'] ?>
            </td>
            <td>
              <?php echo $event['event_title'] ?>
            </td>
            <td>
              <?php echo $event['start_time'] ?>
            </td>
            <td>
              <?php echo $event['end_time'] ?>
            </td>
            <td>
              <!-- <a href="addEventDetails.php" class="link-dark"><i class="fa-solid fa-plus-circle fs-5"
                  style="margin-right: 15px;"></i></a> -->
              <a href="eventsDetailsViewViewer.php?id=<?php echo $event["id"]; ?>" class="link-dark"><i
                  class="fas fa-eye fs-5 me-3"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-------------------------------------------------FOOTER------------------------------------------------------------->

  <footer class="footer">
        <div class="footer-col">
            <h4>2023 Event Calendar For IIUM's Social Club</h4>
            <ul>
                <li>Website: <a href="www.calventer.com">www.calventer.com</a></li>
                <li>Email: <a href="mailto:calventer@edu.my">calventer@edu.my</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>follow us</h4>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <p class="footer-copyright">
                Copyright &copy; 2023 calventer. Designed by <span>Ridia and Nouran</span>
            </p>
        </div>
    </footer>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5qErKeQpavO5uq6ZlS2Nl/R7RfY/Q3JXZU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyETiRB6l5UdHgqj3sn5/jVd1FzUqI2Jf/6M"
        crossorigin="anonymous"></script>
    <script src="js/adminEvents.js"></script>


</body>

</html>