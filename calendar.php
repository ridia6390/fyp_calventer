<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style/fullcalendar.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/calendar.css">
  <title> Calendar </title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="calender.php" class="calendar-active">Calendar</a>
      <a href="events.php">Events</a>
      <a href="contact.php">Contact</a>
    </nav>

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
  include('modalNewEvent.php');
  include('modalUpdateEvent.php');
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

        // Delete Event
        eventRender: function (event, element) {
          element
            .find(".fc-content")
            .prepend("<span id='btnClose'; class='closeon material-icons'>&#xe5cd;</span>");

          // Delete Event
          element.find(".closeon").on("click", function () {
            var question = confirm("Do you want to delete this event?");
            if (question) {
              $("#calendar").fullCalendar("removeEvents", event._id);
              $.ajax({
                type: "POST",
                url: 'deleteEvent.php',
                data: { id: event._id },
                success: function (data) {
                  $(".alert-danger").show();
                  setTimeout(function () {
                    $(".alert-danger").slideUp(500);
                  }, 3000);
                }
              });
            }
          });
        },

        // Moving Event Drag and Drop
        eventDrop: function (event, delta) {
          var idEvent = event._id;
          var start = event.start.format('YYYY-MM-DDTHH:mm:ss');
          var end = event.end.format('YYYY-MM-DDTHH:mm:ss');
          $.ajax({
            url: 'drag_drop_event.php',
            data: 'start=' + start + '&end=' + end + '&idEvent=' + idEvent,
            type: "POST",
            success: function (response) {
              // $("#response").html(response);
            }
          });
        },


        // Modify Calendar Event
        eventClick: function (event) {
          var idEvent = event._id;
          $('input[name=idEvent]').val(idEvent);
          $('input[name=club_name]').val(event.club_name); // Set club name input
          $('input[name=event_title]').val(event.title);
          $('input[name=event_date]').val(moment(event.start).format('YYYY-MM-DD')); // Correctly set the date
          $('input[name=start_time]').val(moment(event.start).format('HH:mm')); // Correctly set start time
          $('input[name=end_time]').val(moment(event.end).format('HH:mm')); // Correctly set end time

          $("#modalUpdateEvent").modal();
        },

      });

      // Hide Notification Messages
      setTimeout(function () {
        $(".alert").slideUp(300);
      }, 3000);
    });
  </script>
</body>

</html>