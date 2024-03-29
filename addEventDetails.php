<?php
include 'php/config.php';
session_start();

if (isset($_POST["submit"])) {
   $event_theme = mysqli_real_escape_string($conn, $_POST['event_theme']);
   $dress_code = mysqli_real_escape_string($conn, $_POST['dress_code']);
   $venue = mysqli_real_escape_string($conn, $_POST['venue']);
   $description = mysqli_real_escape_string($conn, $_POST['description']);
   

   // File Upload
   $poster = '';
   if (isset($_FILES['poster']) && $_FILES['poster']['error'] == 0) {
      $poster_temp = $_FILES['poster']['tmp_name'];
      $poster_name = $_FILES['poster']['name'];
      $poster = 'uploaded_poster/' . $poster_name;

      // Uploaded file moved to the desired location
      if (move_uploaded_file($poster_temp, $poster)) {
         echo "File uploaded successfully!<br>";
      } else {
         echo "Failed to move the uploaded file!<br>";
      }
   }

$sql = "INSERT INTO `events` (`event_theme`, `dress_code`, `venue`,`description`,`poster`) VALUES ('$event_theme', '$dress_code', '$venue','$description','$poster')";

$result = mysqli_query($conn, $sql);

if ($result) {
    $event_id = mysqli_insert_id($conn);
    $_SESSION['added_event_id'] = $event_id;

    header("Location: adminEvents2.php?msg=New details added successfully");
    exit;
} else {
    echo "Failed to insert data: " . mysqli_error($conn) . "<br>";
}

}
?>

<?php
include 'admins.php';

// Checking User Login
if (!isset($_SESSION['admin_id'])) {
    // Redirecting to the Login page if not Logged in
    header('location: adminLogin.php');
    exit();
}
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

   <title> Add Event Details </title>
</head>

<body>

   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #078c7c; color: white;">
      ADD EVENT DETAILS
   </nav>

   <div class="container">
      <div class="container d-flex justify-content-center">
         <form action="" method="post" enctype="multipart/form-data"
            style="width:100vw; min-width:100px; font-weight: 600;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Event Theme</label>
                  <input type="text" class="form-control" name="event_theme" placeholder="Cultural Night">
               </div>

               <div class="col">
                  <label class="form-label">Dress Code</label>
                  <input type="text" class="form-control" name="dress_code" placeholder="Traditional Attire">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Venue</label>
               <input type="text" class="form-control" name="venue" placeholder="Main Auditorium">
            </div>

            <div class="mb-3">
               <label class="form-label">Description</label>
               <input type="text" class="form-control" name="description" placeholder="Event Description" style= "height:100px; padding-bottom: 60px">
            </div>

            <div class="mb-3">
               <label class="form-label">Poster</label>
               <input type="file" class="form-control" name="poster" required class="box"
                  accept="image/jpg, image/png, image/jpeg">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit"
                  style="background-color: #56ab91; border: 1px solid #56ab91">Save</button>
               <a href="adminEvents2.php" class="btn btn-danger">Cancel</a>
            </div>

         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

</body>

</html>