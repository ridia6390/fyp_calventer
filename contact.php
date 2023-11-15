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
  <!---------------------------------------------------------------ABOUT US------------------------------------------------------------->
  <div class="about">
    <div class="about-box">
      <img class="logo" src="images/logo.png" alt="">
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
        <script>
          document.addEventListener('DOMContentLoaded', function () {
            var content = document.getElementById('calventerContent');
            var link = document.getElementById('readMoreLink');

            link.addEventListener('click', function (event) {
              event.preventDefault();

              if (content.style.maxHeight) {
                content.style.maxHeight = null;
              } else {
                content.style.maxHeight = content.scrollHeight + 'px';
              }

              link.textContent = link.textContent === 'Read More' ? 'Read Less' : 'Read More';
            });
          });
        </script>
      </div>
    </div>
  </div>


  <!---------------------------------------------------------------TEAM------------------------------------------------------------->
  <div class="team">
    <div class="slide-container">
      <div class="slide-content">
        <div class="card-wrapper">
          <div class="card">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="images/madam.png" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">Marini Binti Othman (Dr.)</h2>
              <h3 class="description">SUPERVISOR OF CALVENTER</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


















































  <!-- <div class="content">
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
  </div> -->

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
</body>

</html>