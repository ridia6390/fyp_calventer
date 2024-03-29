<?php
session_start();

function getUserInfo($id)
{
  global $conn;
  $select = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
  $select->execute([$id]);
  return $select->fetch(PDO::FETCH_ASSOC);
}

?>

<?php
include 'admins.php';

// Checking User Login
if (!isset($_SESSION['admin_id'])) {
  // Redirecting to the Login page if not Logged in
  header('location: viewerLogin.php');
  exit();
}

// Retrieving user information from the session
$admin_id = $_SESSION['admin_id'];

// Assuming a function to get user information based on the ID
$user_info = getUserInfo($admin_id);

// Checking user information availability
if ($user_info) {
  $image = $user_info['image'];
  $username = $user_info['name'];
  $image_path = "image/$image";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
      <a href="viewerHome2.php">Home</a>
      <a href="viewerCalendar2.php">Calender</a>
      <a href="viewerEvents2.php">Events</a>
      <a href="viewerAbout2.php">About</a>
      <a href="viewerContact2.php" class="contact-active">Contact</a>
      <?php if (isset($image) && isset($username)): ?>
        <div class="user-profile" onclick="openUserProfileUpdate()">
          <img src="<?php echo $image_path; ?>" alt="User Image">
          <span class="username">
            <?php echo $username; ?>
          </span>
        </div>
        <div class="logout-icon">
          <a href="viewerLogout.php" class='bx bx-log-out'>
          </a>
        </div>
      <?php endif; ?>

    </nav>


  </header>

</head>

<body>

  <section class="contact-form-container">

    <form action="viewerContactMail2.php" method="post" enctype="multipart/form-data">
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

  <!-------------------------------------------------Footer------------------------------------------------------------>

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