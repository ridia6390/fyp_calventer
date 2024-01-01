<!-- viewer_calendar.php -->
<!DOCTYPE html>
<html lang="en">

<head>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style/fullcalendar.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/viewerCalendar.css">
  <title>Viewer Calendar</title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="calendar.php" class="calendar-active">Calendar</a>
      <a href="events.php">Events</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
</head>

<body>
  <div id="viewer-calendar"></div>

  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/moment.min.js"></script>
  <script type="text/javascript" src="js/fullcalendar.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#viewer-calendar").fullCalendar({
        header: {
          left: "prev,next today",
          center: "title",
          right: "month,agendaWeek,agendaDay"
        },
        defaultView: "month",
        events: [
          // Fetch events from the database
          <?php
          // Include the database configuration file
          require("php/config.php");

          // Fetch events from the database
          $SqlEvents = "SELECT * FROM calendar";
          $resultEvents = mysqli_query($conn, $SqlEvents);

          // Format the events for FullCalendar
          $events = [];
          while ($eventData = mysqli_fetch_array($resultEvents)) {
              $events[] = [
                  'id' => $eventData['id'],
                  'title' => $eventData['event_title'],
                  'start' => $eventData['event_date'] . 'T' . $eventData['start_time'],
                  'end' => $eventData['event_date'] . 'T' . $eventData['end_time'],
                  'color' => $eventData['color_event']
              ];
          }

          echo json_encode($events);
          ?>
        ],
        eventClick: function (event) {
          // Redirect to event details page
          window.location.href = 'viewerEventView.php?id=' + event.id;
        },
        dayClick: function (date, jsEvent, view) {
          // Handle clicks on empty dates (no events)
          alert("No Events on " + date.format('YYYY-MM-DD'));
        }
      });
    });
  </script>
</body>

</html>
