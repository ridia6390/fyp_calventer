<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/contactstyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title>Contact</title>
</head>

<body>
  <!-- DEMO TEAM DESIGN-->
  <div class="about">
    <div class="about-box">
      <h3>About Us</h3>
      <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem enim aut atque officiis
        optio aspernatur magnam,
        reiciendis in eum rerum fugiat illo! Sint porro nihil odio obcaecati temporibus corrupti tempore.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa soluta accusamus,
        optio neque distinctio vero deleniti nesciunt,
        laudantium sint ullam necessitatibus. Magni maiores,
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem enim aut atque officiis
        optio aspernatur magnam,
        reiciendis in eum rerum fugiat illo! Sint porro nihil odio obcaecati temporibus corrupti tempore.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa soluta accusamus,
        optio neque distinctio vero deleniti nesciunt,
        laudantium sint ullam necessitatibus. Magni maiores, dolore officiis numquam libero nisi expedita dolore officiis numquam libero nisi expedita
      </p>


    </div>
  </div>


  <div class="content">
    <section id="team">

      <div class="team-heading">
        <h3>team</h3>
      </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="team-box">
              <div class="image1">
                <img src="images/bu.jpg">
              </div>
              <div class="text">
                <strong>Ms Butterfly</strong>
                <span> WEB DEVELOPER</span>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-box">
              <div class="image1">
                <img src="images/bu.jpg">
              </div>
              <div class="text">
                <strong>Ms Butterfly</strong>
                <span> WEB DEVELOPER</span>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-box">
              <div class="image1">
                <img src="images/bu.jpg">
              </div>
              <div class="text">
                <strong>Ms Butterfly</strong>
                <span> WEB DEVELOPER</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
  </div>

  <div class="container">
    <div class="box form-box">
      <header>Need Help?</header>
      <header2>We're Here For You! Contact Us
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

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">   
          </div>
        </div>
      </div>
    </div>
 </footer>
</body>

</html>