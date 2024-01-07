<?php
session_start();

// Function to get user information based on ID
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

// Check if the user is logged in
if (!isset($_SESSION['admin_id'])) {
  // Redirect to the login page if not logged in
  header('location: adminLogin.php');
  exit();
}

// Retrieve user information from the session
$admin_id = $_SESSION['admin_id'];

// Assuming you have a function to get user information based on the ID
$user_info = getUserInfo($admin_id);

// Check if user information is available
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
   <!-- Boxicon link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
      <a href="adminHome2.php">Home</a>
      <a href="adminCalendar2.php">Calender</a>
      <a href="adminEvents2.php">Events</a>
      <a href="adminAbout2.php">About</a>
      <a href="adminContact2.php" class="contact-active">Contact</a>
      <?php if (isset($image) && isset($username)): ?>
        <div class="user-profile" onclick="openUserProfileUpdate()">
          <img src="<?php echo $image_path; ?>" alt="User Image">
          <span class="username">
            <?php echo $username; ?>
          </span>
        </div>
        <div class="logout-icon">
          <a href="logout.php" class='bx bx-log-out'>
          </a>
        </div>
      <?php endif; ?>

    </nav>
    

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

  <script src="js/adminContact.js"></script>

</body>

</html>