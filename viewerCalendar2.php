<?php
session_start();

// Function to get user information based on ID
function getUserInfo($id)
{
  global $conn;
  $select = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
  $select->execute([$id]);
  return $select->fetch(PDO::FETCH_ASSOC);
}

?>

<?php
include 'admins.php';

// Check if the user is logged in
if (!isset($_SESSION['admin_id'])) {
  // Redirect to the login page if not logged in
  header('location: viewerLogin.php');
  exit();
}

// Retrieve user information from the session
$admin_id = $_SESSION['admin_id'];

// Assuming you have a function to get user information based on the ID
$user_info = getUserInfo($admin_id);

// Check if user information is available
if ($user_info) {
  $image = $user_info['image'];
  $username = $user_info['name'];
  $image_path = "image/$image";
}
?>

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
  <link rel="stylesheet" href="style/viewerCalendar.css">
  <!-- Boxicon link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <title> Viewer Calendar </title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="viewerHome2.php">Home</a>
      <a href="viewerCalendar2.php" class="calendar-active">Calendar</a>
      <a href="viewerEvents2.php">Events</a>
      <a href="viewerAbout2.php">About</a>
      <a href="viewerContact2.php">Contact</a>
      <?php if (isset($image) && isset($username)): ?>
        <div class="user-profile" onclick="openUserProfileUpdate()">
          <img src="<?php echo $image_path; ?>" alt="User Image">
          <span class="username">
            <?php echo $username; ?>
          </span>
        </div>
        <div class="logout-icon">
          <a href="viewerLogout.php" class='bx bx-log-out'>
          </a>
        </div>
      <?php endif; ?>

    </nav>
    <a href="eventForm.php" class="eventForm-icon">
      <i class='bx bx-mail-send'></i>
    </a>

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
  include('modalViewEventViewer.php');
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5qErKeQpavO5uq6ZlS2Nl/R7RfY/Q3JXZU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyETiRB6l5UdHgqj3sn5/jVd1FzUqI2Jf/6M"
    crossorigin="anonymous"></script>
  <script src="js/viewerCalendar.js"></script>
</body>

</html>