<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="style/fullcalendar.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="style/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <link rel="stylesheet" href="style/adminCalendar.css">
  
  <title> Admin Calendar </title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="adminHome1.php">Home</a>
      <a href="adminCalendar1.php" class="calendar-active">Calendar</a>
      <a href="adminEvents1.php">Events</a>
      <a href="adminAbout1.php">About</a>
      <a href="adminContact1.php">Contact</a>
    </nav>

    <button class="btn" onclick="navigateToAdminLoginPage()"> LOGIN </button>

  </header>
</head>

<body>

  <?php
  include('php/config.php');

  $SqlEvents = ("SELECT * FROM calendar");
  $resultEvents = mysqli_query($conn, $SqlEvents);

  ?>
  <div class="mt-5"></div>

  <div class="container">
    <div class="row">
      <div class="col message">
        <?php
        include('message.php');
        ?>
      </div>
    </div>
  </div>

  <div id="calendar"></div>

  <?php
  include('modalViewEventAdmin.php');
  ?>

  <script src="js/jquery-3.0.0.min.js"> </script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/moment.min.js"></script>
  <script type="text/javascript" src="js/fullcalendar.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#calendar").fullCalendar({
        header: {
          left: "prev,next today",
          center: "title",
          right: "month,agendaWeek,agendaDay"
        },

        defaultView: "month",
        navLinks: true,
        editable: true,
        eventLimit: true,
        selectable: true,
        selectHelper: false,

        // New Event
        select: function (start, end) {
          $("#exampleModal").modal();
          $("input[name=club_name]").val(''); // Clear club name input
          $("input[name=event_title]").val(''); // Clear event title input
          $("input[name=event_date]").val(moment(start).format('YYYY-MM-DD')); // Correctly set the date
          $("input[name=start_time]").val(''); // Clear start time input
          $("input[name=end_time]").val(''); // Clear end time input
          $("input[name=club_name]").val(''); // Clear club name input
        },


        events: [
          <?php
          while ($eventData = mysqli_fetch_array($resultEvents)) { ?>
                    {
              _id: '<?php echo $eventData['id']; ?>',
              title: '<?php echo $eventData['event_title']; ?>',
              club_name: '<?php echo $eventData['club_name']; ?>',
              start: '<?php echo $eventData['event_date'] . 'T' . $eventData['start_time']; ?>',
              end: '<?php echo $eventData['event_date'] . 'T' . $eventData['end_time']; ?>',
              color: '<?php echo $eventData['color_event']; ?>'
            },
          <?php } ?>
        ],

        // Modify Calendar Event
        eventClick: function (event) {
          $('#idEvent').val(event._id);
          $('#club_name').text(event.club_name);
          $('#event_title').text(event.title);
          $('#event_date').text(moment(event.start).format('YYYY-MM-DD'));
          $('#start_time').text(moment(event.start).format('HH:mm'));
          $('#end_time').text(moment(event.end).format('HH:mm'));

          $("#modalUpdateEvent").modal();
        },

      });

      // Hide Notification Messages
      setTimeout(function () {
        $(".alert").slideUp(300);
      }, 3000);
    });
  </script>

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


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5qErKeQpavO5uq6ZlS2Nl/R7RfY/Q3JXZU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyETiRB6l5UdHgqj3sn5/jVd1FzUqI2Jf/6M"
    crossorigin="anonymous"></script>
  <script src="js/adminCalendar.js"></script>
</body>

</html>