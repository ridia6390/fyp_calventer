<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Calendar </title>
  <link rel="stylesheet" type="text/css" href="style/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/calendar.css">
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
  <!-- <script src='locales/es.js'></script> -->

  <script type="text/javascript">
    $(document).ready(function () {
      $("#calendar").fullCalendar({
        header: {
          left: "prev,next today",
          center: "title",
          right: "month,agendaWeek,agendaDay"
        },

        // locale: 'es',

        defaultView: "month",
        navLinks: true,
        editable: true,
        eventLimit: true,
        selectable: true,
        selectHelper: false,

        //New Event
        select: function (start, end) {
          $("#exampleModal").modal();
          $("input[name=start_date]").val(start.format('DD-MM-YYYY'));

          var endDateValue = end.format("DD-MM-YYYY");
          var D_final = moment(endDateValue, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY');
          $('input[name=end_date').val(D_final);

        },

        events: [
          <?php
          while ($eventData = mysqli_fetch_array($resultEvents)) { ?>
            {
              _id: '<?php echo $eventData['id']; ?>',
              title: '<?php echo $eventData['event']; ?>',
              start: '<?php echo $eventData['start_date']; ?>',
              end: '<?php echo $eventData['end_date']; ?>',
              color: '<?php echo $eventData['color_event']; ?>'
            },
          <?php } ?>
        ],


        //Delete Event
        eventRender: function (event, element) {
          element
            .find(".fc-content")
            .prepend("<span id='btnClose'; class='closeon material-icons'>&#xe5cd;</span>");

          //Delete Event
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


        //Moving Event Drag and Drop
        eventDrop: function (event, delta) {
          var idEvent = event._id;
          var start = (event.start.format('DD-MM-YYYY'));
          var end = (event.end.format("DD-MM-YYYY"));

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
          $('input[name=idEvent').val(idEvent);
          $('input[name=event').val(event.title);
          $('input[name=start_date').val(event.start.format('DD-MM-YYYY'));
          $('input[name=end_date').val(event.end.format("DD-MM-YYYY"));

          $("#modalUpdateEvent").modal();
        },


      });


      //Hide Notification Messages
      setTimeout(function () {
        $(".alert").slideUp(300);
      }, 3000);


    });

  </script>
</body>

</html>