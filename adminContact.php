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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  
  <link rel="stylesheet" href="style/adminContact.css" />

  <!-- Boxicon link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
  <link rel="stylesheet" href="style/swiper-bundle.min.css">
 
  <title> Admin Contact</title>
  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="adminHome.php">Home</a>
      <a href="adminCalendar.php">Calender</a>
      <a href="adminEvents.php">Events</a>
      <a href="adminContact.php" class="contact-active">Contact</a>
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
  <!---------------------------------------------------------------ABOUT US------------------------------------------------------------->
  <div class="about">
    <div class="about-box">
      <img class="about-logo" src="image/logo.png" alt="">
      <div class="about-content">
        <h3>About Us</h3>
        <p id="calventerContent"> Discover "Calventer", your ultimate event calendar for IIUM's social clubs!
          We bring you a seamless platform to stay informed, manage your time, and never miss out on the exciting
          happenings at your university."Calventer" is the go-to web application designed exclusively for IIUM's
          vibrant social clubs. Our mission is to eliminate the chaos caused by conflicting events, allowing
          club owners to effortlessly schedule and update their activities without any clashes. Through "Calventer",
          you can access event details, plan your schedule, and ensure a smooth flow of activities throughout the
          academic year. But that's not all - "Calventer" is a community platform! Students and members can easily
          explore the calendar, keeping themselves informed about upcoming events. Whether it's a stimulating workshop,
          a thrilling sports tournament, or an engaging club activity, "Calventer" provides all the essential
          information
          to help you manage your time effectively and attend the events that interest you the most.We believe in the
          power
          of collaboration and user empowerment. That's why "Calventer" allows you to actively engage with the platform.
          Club owners can easily add and modify their event informations, ensuring the calendar remains up to date.
          Students and members have the freedom to browse, discover, and make the most of their university experiences.
          Join "Calventer" today and unlock a world of possibilities, where managing your time and attending events
          becomes a breeze. Embrace the vibrant spirit of IIUM's social clubs and create unforgettable memories along
          the way.
          Together, let's make the most of your university journey!
        </p>
        <a href="#" id="readMoreLink">Read More</a>
      </div>
    </div>
  </div>


  <!-------------------------------------------------CONTACT------------------------------------------------------------->

  <div class="container">
    <div class="box form-box">
      <header> Contact Us </header>
      <header2>We're here for you ! Contact Us
        Today</header2>
      <form action="cprocess.php" method="post">
        <input type="text" name="fname" class="form-control" placeholder="First Name" autocomplete="off" required>
        <input type="text" name="lname" class="form-control" placeholder="Last Name" autocomplete="off" required>
        <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off" required>
        <input type="text" name="subject" class="form-control" placeholder="Subject" autocomplete="off" required>
        <input type="text" name="message" placeholder="Write the message...." autocomplete="off" required>
        <input type="submit" class="btn" name="submit" value="Submit" required>
      </form>
    </div>
  </div>

  <!---------------------------------------------------------------TEAM------------------------------------------------------------->
  <div class="team">
    <div class="slide-container swiper">
      <div class="slide-content">
        <h3>THE TEAM</h3>
        <div class="card-wrapper swiper-wrapper">

          <!-------------------MEET THE TEAM-------------->

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/madam.png" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> Marini Binti Othman (Dr.)</h2>
              <text class="description">SUPERVISOR</text>
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/nouran.png" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> Nouran Ahmad Elmughrabi </h2>
              <text class="description">FRONTEND DEVELOPER</text>
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/ridia.png" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name"> Ridia Kashmeri</h2>
              <text class="description">BACKEND DEVELOPER</text>
            </div>

          </div>


          <!-------------------MEET THE CURRENT CLUBS-------------->

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/wamy.png" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Wamy Club IIUM</h2>
              <text class="description"> CLUB ID - CL2401</text>
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/alsalam.png" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Alsalam Club IIUM</h2>
              <text class="description">CLUB ID - CL2402</text>
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/nibras.png" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Nibras Club IIUM</h2>
              <text class="description">CLUB ID - CL2403</text>
            </div>
          </div>

          <!------------FUTURE COLLABORATORS-------------->

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/collaborator.jpg" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Future Engagement</h2>
              <text class="description">TO BE DETERMINED</text>
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/collaborator.jpg" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Future Engagement</h2>
              <text class="description">TO BE DETERMINED</text>
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="image/collaborator.jpg" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Future Engagement</h2>
              <text class="description">TO BE DETERMINED</text>
            </div>
          </div>


        </div>
        <div class="swiper-button-next swiper-navBtn "></div>
        <div class="swiper-button-prev swiper-navBtn "></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5qErKeQpavO5uq6ZlS2Nl/R7RfY/Q3JXZU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyETiRB6l5UdHgqj3sn5/jVd1FzUqI2Jf/6M"
        crossorigin="anonymous"></script>
    <script src="js/adminContact.js"></script>
</body>

<script src="js/readmore.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/teamswiper.js"></script>

</html>