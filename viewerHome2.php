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

// Checking  user information availability
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

    <title>Viewer Home</title>

    <link rel="stylesheet" href="style/viewerHome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!--Navbar-->
    <header class="header">
        <div class="logo-container">
            <img class="logo" src="image/logo.png" alt="logo">
            <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's
                    Social
                    Clubs</span></div>
        </div>
        <nav class="navbar">
            <a href="viewerHome2.php" class="home-active">Home</a>
            <a href="viewerCalendar2.php">Calender</a>
            <a href="viewerEvents2.php">Events</a>
            <a href="viewerAbout2.php">About</a>
            <a href="viewerContact2.php">Contact</a>
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
    <main>



        <!-------------------------------------------------IMAGE HEADER------------------------------------------------------------->
        <section class="section_header" id="home">
            <div class="home-text">
                <div class="header_img">
                    <img src="image/logo.png" alt="logo">
                </div>
                <h1>Calventer</h1>
                <p>Events Calender For IIUM's Social Clubs</p>
            </div>

        </section>
        <!-------------------------------------------------NEWS PANNEL------------------------------------------------------------->

        <section class="section_news">
            <div class="Section_header">
                <div class="inner">
                    <div class="custom-heading">Announcements</div>
                    <div class="sub-heading">Stay updated with the latest club news and posters.</div>
                    <br>
                    <section class="innercontainer">
                        <section class="container">
                            <div class="card">
                                <div class="image">
                                    <img src="image/kfp5076w.png" alt="" />
                                </div>
                            </div>
                            <div class="card">
                                <div class="image">
                                    <img src="image/legal framework to protect women poster.jpg" alt="" />
                                </div>
                            </div>
                            <div class="card">
                                <div class="image">
                                    <img src="image/WhatsApp-Image-2023-02-02-at-4.25.22-PM.jpeg" alt="" />
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </section>
        <br><br>

        <!-------------------------------------------------CLUBS------------------------------------------------------------->

        <section class="section_clubs">
            <div class="Section_header">
                <div class="inner">
                    <div class="custom-heading">Clubs</div>
                    <div class="sub-heading">Stay updated with the events hosted by the registered clubs to ensure you
                        don't miss out on any exciting activities.</div>
                    <div class="row">
                        <div class="col">
                            <div class="IIUM_clubs">
                                <div class="club_code1"></div>
                                <br><br>
                                <img src="image/image1.png" alt="">
                                <br>
                                <span class="club__title">Club name</span>
                                <div class="name">WAMY IIUM</div>
                                <p class="club">
                                    WAMY IIUM Club at the International Islamic University Malaysia promotes Islamic
                                    values, community engagement, and personal development among Muslim students.
                                    Through various activities, the club strives to create an inclusive environment that
                                    fosters a sense of unity and strengthens the Islamic identity of its members.</p>
                                <div class="club-icons">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="IIUM_clubs">
                                <div class="club_code2"></div>
                                <br><br>
                                <img src="image/image2.png" alt="">
                                <br>
                                <span class="club__title">Club name</span>
                                <div class="name">Alsalam IIUM</div>
                                <p class="club">
                                    Alsalam IIUM Club at the International Islamic University Malaysia is committed to
                                    promoting peace, unity, and Islamic teachings. Through events like seminars,
                                    community service, and social gatherings, the club aims to cultivate a sense of
                                    brotherhood/sisterhood and make a positive impact based on Islamic principles.</p>
                                <br>
                                <div class="club-icons">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="IIUM_clubs">
                                <div class="club_code3"></div>
                                <br><br>
                                <img src="image/image3.png" alt="">
                                <br>
                                <span class="club__title">Club name</span>
                                <div class="name">Nibras IIUM</div>
                                <p class="club">
                                    Nibras IIUM Club at the International Islamic University Malaysia empowers Muslim
                                    students through educational, social, and developmental activities. The club focuses
                                    on leadership, Islamic values, and building a supportive community for personal and
                                    spiritual growth.
                                <div class="club-icons">
                                    <br><br>
                                    <div class="club-icons">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    
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

    <!-------------------------------------------------JS------------------------------------------------------------->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5qErKeQpavO5uq6ZlS2Nl/R7RfY/Q3JXZU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyETiRB6l5UdHgqj3sn5/jVd1FzUqI2Jf/6M"
        crossorigin="anonymous"></script>
    <script src="js/viewerHome.js"></script>


</body>

</html>