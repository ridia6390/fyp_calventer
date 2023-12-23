<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style/events.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Events</title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="calendar.php">Calender</a>
      <a href="events.php" class="events-active">Events</a>
      <a href="contact.php">Contact</a>
    </nav>

  </header>
</head>

<body>
  <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav> -->

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="addDetails.php" class="btn btn-dark mb-3">Add Details</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Event Date</th>
          <th scope="col">Club Name</th>
          <th scope="col">Event Title</th>
          <th scope="col">Event Details</th>
          <th scope="col">Event Media</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `events`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>

            <td>
              <?php echo $row["event_date"] ?>
            </td>
            <td>
              <?php echo $row["club_name"] ?>
            </td>
            <td>
              <?php echo $row["event_title"] ?>
            </td>
            <td>
              <?php echo $row["event_details"] ?>
            </td>
            <td>
              <?php echo $row["event_media"] ?>
            </td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                  class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                  class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>