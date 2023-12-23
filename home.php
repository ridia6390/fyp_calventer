<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Calventer - Home</title>

  <!-- CSS link -->
  <link rel="stylesheet" href="style/home.css">

  <!-- Boxicon link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <script src="js/home.js"></script>

  <!--Navbar-->
  <header class="header">
    <div class="logo-container">
      <img class="logo" src="image/logo.png" alt="logo">
      <div><strong class="bold-text">Calventer</strong> <br> <span class="smaller-text">Event Calendar For IIUM's Social
          Clubs</span></div>
    </div>

    <nav class="navbar">
      <a href="home.php" class="home-active">Home</a>
      <a href="calendar.php" >Calender</a>
      <a href="events.php" >Events</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

</head>

<body>

  <main>
    <section id="section1">
      <img src="image/Event Calender For IIUM's Social Clubs.png" alt="">
    </section>
    <section class="news">
      <div class="slider">
        <div class="list">
          <div class="item">
            <div class="slide">
              <img src="image/legal framework to protect women poster.jpg" alt="">
            </div>
          </div>
          <div class="item">
            <div class="slide">
              <img src="image/kfp5076w.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="slide">
              <img src="image/poster.jpeg" alt="">
            </div>
          </div>
          <div class="item">
            <div class="slide">
              <img src="image/kfp5076w.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="slide">
              <img src="image/legal framework to protect women poster.jpg" alt="">
            </div>
          </div>
          <div class="item">
            <div class="slide">
              <img src="image/legal framework to protect women poster.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="buttons">
          <button id="prev">
            << /button>
              <button id="next">></button>
        </div>
        <ul class="dots">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </section>
    </div>
    </div>
    </section>

    <br><br>

    <section id="section4">
      <h3 class="custom-heading">Clubs</h3>
      <div class="sub-heading">Stay updated with the events hosted by the registered clubs to ensure you don't miss out
        on any exciting activities.</div>
      <section class="Clubs_info">
        <div class="swiper-wrapper">
          <div class="card ">
            <div class="card__image">
              <img src="image/image1.png" alt="card1">
            </div>

            <div class="card__content"></div>
            <span class="club__title">Club name</span>
            <span class="club__name">WAMY IIUM Club</span>

            <p class="card__text">
              WAMY IIUM Club is an Islamic organization at the International Islamic University Malaysia that promotes
              Islamic values, community engagement,<span id="dots1">...</span><span id="more1"> and personal development
                among Muslim students.The club organizes various activities, including
                educational events, seminars, community service initiatives, and social gatherings, to foster a sense of
                brotherhood/sisterhood and create a positive impact based on Islamic principles.</span></p>
            <button onclick="myFunction(1)" id="myBtn1">Read more</button>
          </div>
          <div class="card ">
            <div class="card__image">
              <img src="image/image2.png" alt="card1">
            </div>

            <div class="card__content"></div>
            <span class="club__title">Club name</span>
            <span class="club__name">Alsalam IIUM Club</span>

            <p class="card__text">Alsalam IIUM Club is an organization at the International Islamic University Malaysia
              (IIUM) dedicated to promoting peace, unity, and the<span id="dots2">...</span><span id="more2">teachings
                of Islam among its members and the wider community. The club organizes various activities, including
                educational events, seminars, community service initiatives, and social gatherings, to foster a sense of
                brotherhood/sisterhood and create a positive impact based on Islamic principles.</span> </p>

            <button onclick="myFunction(2)" id="myBtn2">Read more</button>
          </div>

          <div class="card ">
            <div class="card__image">
              <img src="image/image3.png" alt="card1">
            </div>

            <div class="card__content"></div>
            <span class="club__title">Club name</span>
            <span class="club__name">​Nibras IIUM Club</span>

            <p class="card__text">Nibras IIUM Club is an organization at the International Islamic University Malaysia
              (IIUM) that aims to empower and enlighten Muslim students<span id="dots3">...</span><span id="more3">
                through educational, social, and developmental activities. The club focuses on nurturing leadership
                skills, fostering Islamic values, and creating a supportive community for personal and spiritual
                growth.</span></p>

            <button onclick="myFunction(3)" id="myBtn3">Read more</button>
          </div>
        </div>
      </section>
    </section>

    <section class="quote">
    </section>
  </main>
  <br><br><br><br><br><br>
  <footer>
    <div class="footer-content">
      <h3>2023 Event Calendar For IIUM's Social Club</h3>
      <p>Website: www.calventer.com<br>
        Email: calventer@edu.my<br>
        Follow Us</p>
      <div class="footer-icons">
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-twitter'></i>
        <i class='bx bxl-instagram'></i>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy;2023 calvener. Designed by <span>Ridia and Nouran</span></p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>

</html>