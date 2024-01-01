<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title> Viewer Home</title>
    <link rel="stylesheet" href="style/home.css">

    <!-------------------------------------------------NAV------------------------------------------------------------->

    <!--Navbar-->
    <header class="header">
        <div class="logo-container">
            <img class="logo" src="image/logo.png" alt="logo">
            <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's
                    Social
                    Clubs</span></div>
        </div>
        <nav class="navbar">
            <a href="viewerHome.php" class="home-active">Home</a>
            <a href="viewerCalendar.php">Calender</a>
            <a href="events.php">Events</a>
            <a href="contact.php">Contact</a>
        </nav>
        <button class="btn" onclick="navigateToLoginPage()"> LOGIN </button>
        <!-- <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#calender">Calender</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#" class="action_btn">Login</a></li>
            </ul>
        </div> -->

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
                <!-- <a href="#" class="home-btn">Check Calender</a> -->
            </div>

        </section>
        <!-------------------------------------------------NEWS PANNEL------------------------------------------------------------->

        <section class="section_news">
            <div class="Section_header">
                <div class="inner">
                    <div class="custom-heading">Announcements</div>
                    <!--<div class="border"></div>-->
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
                                <div class="name">Alsalam IIUM Club</div>
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
                                <div class="name">Nibras IIUM Club</div>
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
    <script src="js/home.js"></script>


</body>

</html>