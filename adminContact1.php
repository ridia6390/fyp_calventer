<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style/adminContact.css" />
  <link rel="stylesheet" href="style/swiper-bundle.min.css">

  <title>Admin Contact</title>
  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="adminHome1.php">Home</a>
      <a href="adminCalendar1.php">Calender</a>
      <a href="adminEvents1.php">Events</a>
      <a href="adminAbout1.php">About</a>
      <a href="adminContact1.php" class="contact-active">Contact</a>
    </nav>
    <button class="btn" onclick="navigateToLoginPage()"> LOGIN </button>

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

</body>

</html>