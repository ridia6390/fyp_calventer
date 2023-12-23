<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $event_date = $_POST['event_date'];
   $club_name = $_POST['club_name'];
   $event_title = $_POST['event_title'];
   $event_details = $_POST['event_details'];
   $event_media = $_POST['event_media'];

   $sql = "INSERT INTO `events`(`id`, `event_date`, `club_name`, `event_title`, `event_details`,`event_media`) VALUES (NULL,'$event_date','$club_name','$event_title','$event_details','$event_media')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: events.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

// // Fetch events in ascending order by event_date
// $sql = "SELECT * FROM `events` ORDER BY `event_date` ASC";
// $result = mysqli_query($conn, $sql);

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

   <title>Events</title>
</head>

<body>
   <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      PHP Complete CRUD Application
   </nav> -->

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add Event Details</h3>
         <p class="text-muted">Complete the form with Full Event Details</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Event Date</label>
                  <input type="text" class="form-control" name="event_date" placeholder="2024/10/04">
               </div>

               <div class="col">
                  <label class="form-label">Club Name</label>
                  <input type="text" class="form-control" name="club_name" placeholder="Wamy IIUM">
               </div>
            </div>

            <div class="mb-3">
                  <label class="form-label">Event Title</label>
                  <input type="text" class="form-control" name="event_title" placeholder="Minal Aidin">
               </div>

            <div class="mb-3">
               <label class="form-label">Event Details</label>
               <textarea class="form-control" name="event_details" placeholder="Enter event details here..."
                  rows="5"></textarea>
            </div>

            <div class="mb-3">
               <label class="form-label">Event Media </label>
               <textarea class="form-control" name="event_media" placeholder="Enter link here..." rows="3"></textarea>
            </div>





            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="events.php" class="btn btn-danger">Cancel</a>
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