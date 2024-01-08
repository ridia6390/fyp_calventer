<?php

include 'admins.php';

session_start();

if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `admins` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if ($select->rowCount() > 0) {

      if ($row['admin_type'] == 'admin') {

         $_SESSION['admin_id'] = $row['id'];
         header('location:viewerHome2.php');

      } else {
         $message[] = 'no user found!';
      }

   } else {
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style/login.css">

</head>

<body>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>

   <section class="form-container">

      <form action="" method="post" enctype="multipart/form-data">
         <h3> Club Admin Login</h3>
         <input type="email" required placeholder="Enter your email" class="box" name="email">
         <input type="password" required placeholder="Enter your password" class="box" name="pass">
         <input type="submit" value="login" class="btn" name="submit">
         <a href="viewerHome1.php" class="back-btn">Go Back</a>
         <p>Don't have an account? <a href="viewerRegister.php"> Register</a></p>

         <div class="link">
            <a href="password.php">Forgot Password ?</a>
         </div>


      </form>

   </section>

</body>

</html>