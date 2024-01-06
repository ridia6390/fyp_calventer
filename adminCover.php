<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/cover.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" /> 
  <title> Admin Cover</title>
</head>

<body>
  <div class="video-container">
    <video id="myVideo" autoplay muted>
      <source src="image/cover.mp4" type="video/mp4">
    </video>
   
    <div class="color-overlay">
      <img class="iium-logo" src="image/iiumlogo.png" alt="">
      <img class="calventer-logo" src="image/logo.png" alt="">
      <h3 class="project-name">Calventer</h3>
      <h4 class="project-tagline">Event Calender For IIUM's <br> Social Clubs</h4>
      <button class="btn" onclick="navigateToAdminHomePage1()"> Get Started</button>
    </div>

    <div class="video-border">
      <div class="icon-left"><i class='bx bxl-play-store'></i></div>
      <h3> Calventer : Your Navigator through the Maze of IIUM's Social Club Events!</h3>
      <div class="icon-right"><i class='bx bxl-play-store'></i></div>
    </div>


  </div>

  <script src="js/adminCover.js"></script>
</body>

</html>