<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/cover.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Cover</title>
  <script src="js/cover.js"></script>
</head>

<body>
  <div class="video-container">
    <video autoplay loop muted>
      <source src="images/cover.mp4" type="video/mp4">
    </video>
    <div class="color-overlay">
      <img class="iiumlogo" src="images/iiumlogo.png" alt="">
      <img class="logo" src="images/logo.png" alt="">
      <h3 class="project-name">Calventer</h3>
      <h4 class="project-tagline">Event Calender For IIUM's <br> Social Clubs</h4>
      <div class="club-admin">
        <input type="submit" class="btn" name="submit" value="Club Admin" onclick="navigateToPage()">
      </div>
      <div class="event-viewer">
        <input type="submit" class="btn" name="submit" value="Event Viewer">
      </div>
      <div class="video-border">
        <div class="icon-left"><i class='bx bxl-play-store'></i></div>
        <h3> Calventer : Your Navigator through the Maze of IIUM's Social Club Events!</h3>
        <div class="icon-right"><i class='bx bxl-play-store'></i></div>
      </div>
    </div>
  </div>
</body>


</html>