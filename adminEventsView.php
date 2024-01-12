<?php
include 'db_conn.php';
session_start();

if (isset($_POST['submit'])) {
   if (!isset($_POST['event_id'])) {
      echo "Invalid request: Event ID is missing.";
      exit;
   }

   // Updating event details
   $eventId = $_POST['event_id'];
   $event_theme = mysqli_real_escape_string($conn, $_POST['event_theme']);
   $dress_code = mysqli_real_escape_string($conn, $_POST['dress_code']);
   $venue = mysqli_real_escape_string($conn, $_POST['venue']);
   $description = mysqli_real_escape_string($conn, $_POST['description']);
    

   // Getting the current poster path
   $poster = $eventData['poster'];

    if (!empty($_FILES['new_poster']['name'])) {
      $uploadDir = 'uploaded_poster/';
      $uploadFile = $uploadDir . basename($_FILES['new_poster']['name']);
   
      if (move_uploaded_file($_FILES['new_poster']['tmp_name'], $uploadFile)) {
          $poster = $uploadFile; 
      } else {
          echo "Failed to upload poster. Please try again.";
          exit;
      }
   } else {
      $poster = $_POST['current_poster'];
   }


   $updateSql = "UPDATE events SET 
        event_theme = '$event_theme', 
        dress_code = '$dress_code', 
        venue = '$venue', 
        description = '$description',
        poster = '$poster'
        WHERE id = $eventId";

   $updateResult = mysqli_query($conn, $updateSql);

   if ($updateResult) {
      header("Location: viewerEvents2.php?msg=Event details updated successfully");
      exit;
   } else {
      echo "Failed to update: " . mysqli_error($conn);
   }
}

// Fetching the event details based on the ID from the URL
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

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title> View Event Details </title>
</head>

<body>

   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #078c7c; color: white;">
      VIEW EVENT DETAILS
   </nav>

   <div class="container">
      <div class="container d-flex justify-content-center">
         <form action="" method="post" enctype="multipart/form-data"
            style="width:80vw; min-width:80px; font-weight: 600;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Event Theme</label>
                  <p class="form-control">
                     <?= $eventData['event_theme'] ?>
                  </p>
               </div>

               <div class="col">
                  <label class="form-label">Dress Code</label>
                  <p class="form-control">
                     <?= $eventData['dress_code'] ?>
                  </p>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Venue</label>
               <p class="form-control">
                  <?= $eventData['venue'] ?>
               </p>
            </div>

            
            <div class="mb-3">
               <label class="form-label">Description</label>
               <p class="form-control" style= "height:100px; padding-bottom: 60px">
                  "<?= $eventData['description'] ?>" 
               </p>
            </div>

            <div class="mb-3">
               <label class="form-label">Current Poster</label>
               <img src="<?= $eventData['poster'] ?>" alt="Current Poster" style="max-width: 200px;">
            </div>

         
            <input type="hidden" name="event_id" value="<?= $eventId ?>">
            <input type="hidden" name="poster" value="<?= $eventData['poster'] ?>">


            <div>
               <a href="adminEvents1.php" class="btn btn-danger" style="background-color: #56ab91; border: 1px solid #56ab91">Back</a>

            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

</body>

</html>