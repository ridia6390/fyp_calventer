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
  header('location: adminLogin.php');
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

  <link rel="stylesheet" href="style/swiper-bundle.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="style/adminAbout.css" />

  <title>Admin About</title>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's
          Social
          Clubs</span></div>
    </div>
    <nav class="navbar">
      <a href="adminHome2.php">Home</a>
      <a href="adminCalendar2.php">Calender</a>
      <a href="adminEvents2.php">Events</a>
      <a href="adminAbout2.php" class="about-active">About</a>
      <a href="adminContact2.php">Contact</a>
      <?php if (isset($image) && isset($username)): ?>
        <div class="user-profile" onclick="openUserProfileUpdate()">
          <img src="<?php echo $image_path; ?>" alt="User Image">
          <span class="username">
            <?php echo $username; ?>
          </span>
        </div>
        <div class="logout-icon">
          <a href="adminLogout.php" class='bx bx-log-out'>
          </a>
        </div>
      <?php endif; ?>
      </nav>

  </header>

</head>

<body>
  <!---------------------------------------------------------------Banner------------------------------------------------------------->


  <section class="banner">

    <img src="image/banner2.png" alt="Banner Image">


    <div class="banner-content">
      <img src="image/logo.png" alt="logo">
      <h3>About us</h3>
      <div class="border1"></div>
      <div class="header_img">

      </div>
    </div>
    </div>
  </section>
  <!---------------------------------------------------------------About Us------------------------------------------------------------->


  <section id="services">
    <div class="containernew">

      <div class="rownew">

        <div class="item">
          <img src="image\clock.png" alt="calender">
          <h3>Seamless Event Management </h3>
          <p>Discover "Calventer," your ultimate event calendar for IIUM's social clubs.
            Stay informed and manage your time effortlessly with our user-friendly platform.</p>
        </div>

        <div class="item">
          <img src="image\wrench.png" alt="calender">
          <h3>Conflict-Free Scheduling</h3>
          <p>Eliminate chaos caused by conflicting events.
            Club owners can effortlessly schedule and update activities without clashes.</p>
        </div>

        <div class="item">
          <img src="image\calendar.png" alt="calender">
          <h3>Detailed Event Access</h3>
          <p>Access comprehensive event details at your fingertips.
            Plan your schedule and ensure a smooth flow of activities throughout the academic year.</p>
        </div>


        <div class="item">
          <img src="image\global.png" alt="calender">
          <h3>Community Platform</h3>
          <p>"Calventer" is not just a calendar; it's a community platform.
            Explore upcoming events, from stimulating workshops to thrilling sports tournaments.</p>
        </div>


        <div class="item">
          <img src="image\students.png" alt="calender">
          <h3>Student Involvement</h3>
          <p>Students and members have the freedom to browse, discover, and engage.
            Make the most of your university experiences by attending events that interest you the most.</p>
        </div>


        <div class="item">
          <img src="image\mortarboard.png" alt="calender">
          <h3>Embrace the Spirit of IIUM</h3>
          <p>Embrace the vibrant spirit of IIUM's social clubs.
            Create unforgettable memories and make the most of your university journey together.</p>
        </div>


      </div>

    </div>
  </section>


  <br><br>

  <!---------------------------------------------------------------Team------------------------------------------------------------->
  <section class="section_news">
    <div class="Section_header">
      <div class="inner">
        <div class="headingss">
          <h2>Meet the team</h2>
        </div>
        <div class="border2"></div>
        <div class="sub-heading"></div>
          <div class="team">
            <div class="slide-container swiper">
              <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                  <!-------------------Meet The Team-------------->

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


                  <!-------------------Meet The Current Clubs-------------->

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

                  <!------------Future Collaborators-------------->

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
      </div>
    </div>
  </section>

      <!-------------------------------------------------Footer------------------------------------------------------------->

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


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5qErKeQpavO5uq6ZlS2Nl/R7RfY/Q3JXZU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyETiRB6l5UdHgqj3sn5/jVd1FzUqI2Jf/6M"
    crossorigin="anonymous"></script>
  <script src="js/adminAbout.js"></script>

</body>

<script src="js/readmore.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/teamswiper.js"></script>

</html>

