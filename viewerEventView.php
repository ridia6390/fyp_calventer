<!-- viewer_event_details.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Event Details</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Event Details</h2>
        <?php
        // Include the database configuration file
        require("php/config.php");

        // Get the event ID from the query parameter
        $eventId = $_GET['id'];

        // Fetch event details from the database
        $sqlEventDetails = "SELECT * FROM calendar WHERE id = $eventId";
        $resultEventDetails = mysqli_query($conn, $sqlEventDetails);

        if ($resultEventDetails && mysqli_num_rows($resultEventDetails) > 0) {
            $eventDetails = mysqli_fetch_assoc($resultEventDetails);
            ?>
            <p><strong>Title:</strong> <?php echo $eventDetails['event_title']; ?></p>
            <p><strong>Club Name:</strong> <?php echo $eventDetails['club_name']; ?></p>
            <p><strong>Date:</strong> <?php echo $eventDetails['event_date']; ?></p>
            <p><strong>Start Time:</strong> <?php echo $eventDetails['start_time']; ?></p>
            <p><strong>End Time:</strong> <?php echo $eventDetails['end_time']; ?></p>
            <p><strong>Color:</strong> <?php echo $eventDetails['color_event']; ?></p>
        <?php
        } else {
            echo "<p>Event not found.</p>";
        }
        ?>
        <a href="viewerCalendar.php">Back to Calendar</a>
    </div>
</body>

</html>
