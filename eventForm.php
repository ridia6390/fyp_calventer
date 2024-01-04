<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Event Form </title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style/register.css">
  <!-- <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
 
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
 
    body {
      font-weight: 300;
      font-size: 12px;
      line-height: 30px;
      color: #272727;
      background: rgb(25, 199, 155);
    }
 
    .container {
      max-width: 400px;
      width: 100%;
      margin: 0 auto;
      position: relative;
    }
 
    #contact input {
      font: 400 12px/16px;
      width: 100%;
      border: 1px solid #CCC;
      background: #FFF;
      margin: 10 5px;
      padding: 10px;
    }
 
    h1 {
      margin-bottom: 30px;
      font-size: 30px;
    }
 
    #contact {
      background: #F9F9F9;
      padding: 25px;
      margin: 50px 0;
    }
 
 
    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }
 
    textarea {
      height: 100px;
      max-width: 100%;
      resize: none;
      width: 100%;
    }
 
    button {
      cursor: pointer;
      width: 100%;
      border: none;
      background: rgb(17, 146, 60);
      color: #FFF;
      margin: 0 0 5px;
      padding: 10px;
      font-size: 20px;
    }
 
    button:hover {
      background-color: rgb(15, 95, 42);
    }
  </style> -->
</head>

<body>
  <section class="event-form-container">

    <form action="mail.php" method="post" enctype="multipart/form-data">
      <h3> ADD UPCOMING EVENTS </h3>
      <h4 class="guidance"> Fill up the form with correct event details. Make sure all the information is accurate
        before submission.</h4>
      <h4 class="disclaimer"> * Please send us the event details at least ONE WEEK prior * </h4>
      <input type="email" required placeholder="Email" class="box" name="email">
      <input type="text" required placeholder="Club Name" class="box" name="name">
      <input type="text" required placeholder="Event Title" class="box" name="title">
      <input type="date" required placeholder="Event Date" class="box" name="date">
      <input type="time" required placeholder="Start Time" class="box" name="start_time">
      <input type="time" required placeholder="End Time" class="box" name="end_time">
      <input type="text" required placeholder="Event Theme" class="box" name="theme">
      <input type="text" required placeholder="Dress Code" class="box" name="dress_code">
      <input type="text" required placeholder="Venue" class="box" name="venue">
      <input type="file" name="poster" required class="box" accept="image/jpg, image/png, image/jpeg">
      <input type="text" required placeholder="Event Description" class="paragraph" name="description">
      <input type="submit" value="submit" class="btn" name="submit">
    </form>


  </section>

</body>

</html>