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
  <link rel="stylesheet" href="style/eventForm.css">
</head>

<body>
  <section class="event-form-container">

    <form action="eventFormMail.php" method="post" enctype="multipart/form-data">
      <h3> SEND UPCOMING EVENT DETAILS </h3>
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
      <a href="viewerCalendar2.php" class="back-btn">Go Back</a>
    </form>


  </section>

</body>

</html>