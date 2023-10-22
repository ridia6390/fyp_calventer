<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="style/teamstyle.css" /> -->
  <link rel="stylesheet" href="style/style.css" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
  <title>Contact</title>
</head>

<body>
  <!-- DEMO TEAM DESIGN 
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
                <img src="images/butterfly.jpg">
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
                <img src="images/butterfly.jpg">
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
                <img src="images/butterfly.jpg">
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
                <img src="images/butterfly.jpg">
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
                <img src="images/butterfly.jpg">
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
  -->
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