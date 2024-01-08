<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Forgot Password </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style/password.css">

</head>

<body>
   <section class="form-container">

      <form action="passwordMail.php" method="post" enctype="multipart/form-data">
         <h3> Trouble with Problem  :(( </h3>
         <input type="name" required placeholder="Enter your username" class="box" name="name">
         <input type="email" required placeholder="Enter your email" class="box" name="email">
         <input type="submit" value="Submit" class="btn" name="submit">
         <a href="viewerLogin.php" class="back-btn">Go Back</a>
      </form>

   </section>

</body>

</html>