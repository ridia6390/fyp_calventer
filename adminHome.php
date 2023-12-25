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
  header('location: login.php');
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Calventer - Home</title>

  <!-- CSS link -->
  <link rel="stylesheet" href="style/adminHome.css">

  <!-- Boxicon link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>
    <nav class="navbar">
      <a href="home.php" class="home-active">Home</a>
      <a href="calendar.php">Calender</a>
      <a href="events.php">Events</a>
      <a href="contact.php">Contact</a>
      <?php if (isset($image) && isset($username)): ?>
        <div class="user-profile" onclick="showPopup('user_page.php?id=<?php echo $admin_id; ?>')">
          <img src="<?php echo $image_path; ?>" alt="User Image">
          <span class="username">
            <?php echo $username; ?>
          </span>
        </div>
      <?php endif; ?>
    </nav>
    <div id="popup-container">
    <div class="popup-content">
      <!-- <span class="close-btn" onclick="closePopup()">&times;</span> -->
      <iframe id="popup-iframe" frameborder="0" allowfullscreen ></iframe>

    </div>
  </div>
  </header>


</head>

<body>


  <main>
    <section id="section1">
      <img src="image/Event Calender For IIUM's Social Clubs.png" alt="">
    </section>
    

 

  <script src="js/home.js"></script>
</body>

</html>