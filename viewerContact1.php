<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style/viewerContact.css" />
  <link rel="stylesheet" href="style/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


  <title>Viewer Contact</title>
  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="viewerHome1.php">Home</a>
      <a href="viewerCalendar1.php">Calender</a>
      <a href="viewerEvents1.php">Events</a>
      <a href="viewerAbout1.php">About</a>
      <a href="viewerContact1.php" class="contact-active">Contact</a>
    </nav>
    <button class="btn" onclick="navigateToViewerLoginPage()"> LOGIN </button>

  </header>

</head>

<body>

  <section class="contact-form-container">

    <form action="mail.php" method="post" enctype="multipart/form-data">
      <h3> CONTACT </h3>
      <h4 class="guidance">We're here for you !!! Contact Us Today</h4>
      
      <input type="text" required placeholder="First Name" class="box" name="first_name">
      <input type="text" required placeholder="Last Name" class="box" name="last_name">
      <input type="email" required placeholder="Email" class="box" name="email">
      <input type="text" required placeholder="Subject" class="box" name="subject">
      <input type="text" required placeholder="Write the message..." class="paragraph" name="message">
      <input type="submit" value="submit" class="submit-btn" name="submit">
    </form>


  </section>

   <!-------------------------------------------------FOOTER------------------------------------------------------------->

   <footer class="footer">
        <div class="footer-col">
            <h4>2023 Event Calendar For IIUM's Social Club</h4>
            <ul>
                <li>Website: <a href="www.calventer.com">www.calventer.com</a></li>
                <li>Email: <a href="mailto:calventer@edu.my">calventer@edu.my</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>follow us</h4>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <p class="footer-copyright">
                Copyright &copy; 2023 calventer. Designed by <span>Ridia and Nouran</span>
            </p>
        </div>
    </footer>

  <script src="js/viewerContact.js"></script>
</body>

</html>