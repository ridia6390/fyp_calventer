<?php
include 'db_conn.php';
session_start();

if (isset($_POST['submit'])) {
    // Check if the event ID is set in the form
    if (!isset($_POST['event_id'])) {
        echo "Invalid request: Event ID is missing.";
        exit;
    }

    // Update event details
    $eventId = $_POST['event_id'];
    $event_theme = mysqli_real_escape_string($conn, $_POST['event_theme']);
    $dress_code = mysqli_real_escape_string($conn, $_POST['dress_code']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    

    // Get the current poster path
    $poster = $eventData['poster'];

    // Handle file upload only if a new poster is provided
    if (!empty($_FILES['new_poster']['name'])) {
        $uploadDir = 'uploaded_poster/';
        $uploadFile = $uploadDir . basename($_FILES['new_poster']['name']);

        if (move_uploaded_file($_FILES['new_poster']['tmp_name'], $uploadFile)) {
            $poster = $uploadFile; // Update poster path
        } else {
            echo "Failed to upload poster.";
            exit;
        }
    }
   

    $updateSql = "UPDATE events SET 
        event_theme = '$event_theme', 
        dress_code = '$dress_code', 
        venue = '$venue', 
        poster = '$poster'
        WHERE id = $eventId";

    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        header("Location: adminEvents.php?msg=Event details updated successfully");
        exit;
    } else {
        echo "Failed to update: " . mysqli_error($conn);
    }
}

// Fetch the event details based on the ID from the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "Invalid event ID.";
    exit;
}

$eventId = $_GET['id'];

$sqlEvent = "SELECT * FROM events WHERE id = $eventId";
$resultEvent = mysqli_query($conn, $sqlEvent);

if (!$resultEvent) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

if (mysqli_num_rows($resultEvent) == 0) {
    echo "Event not found for ID: $eventId";
    exit;
}

$eventData = mysqli_fetch_assoc($resultEvent);
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

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title> Edit Event Details </title>
</head>

<body>

   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #078c7c; color: white;">
      EDIT EVENT DETAILS
   </nav>

   <div class="container">
      <div class="container d-flex justify-content-center">
         <form action="" method="post" enctype="multipart/form-data"
            style="width:50vw; min-width:80px; font-weight: 600;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Event Theme</label>
                  <input type="text" class="form-control" name="event_theme" value="<?= $eventData['event_theme'] ?>"
                     placeholder="Cultural Night">
               </div>

               <div class="col">
                  <label class="form-label">Dress Code</label>
                  <input type="text" class="form-control" name="dress_code" value="<?= $eventData['dress_code'] ?>"
                     placeholder="Traditional Attire">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Venue</label>
               <input type="text" class="form-control" name="venue" value="<?= $eventData['venue'] ?>"
                  placeholder="Main Auditorium">
            </div>

            <div class="mb-3">
               <label class="form-label">Current Poster</label>
               <img src="<?= $eventData['poster'] ?>" alt="Current Poster" style="max-width: 200px;">
            </div>

            <!-- Hidden input field for event ID -->
            <input type="hidden" name="event_id" value="<?= $eventId ?>">

            <!-- Hidden input field for the current poster -->
            <input type="hidden" name="poster" value="<?= $eventData['poster'] ?>">

            <div class="mb-3">
               <label class="form-label">New Poster</label>
               <input type="file" class="form-control" name="new_poster" accept="image/jpg, image/png, image/jpeg">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit"
                  style="background-color: #56ab91; border: 1px solid #56ab91">Update</button>
               <a href="adminEvents.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

</body>

</html>
