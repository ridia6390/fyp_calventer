<?php

include 'admins.php';

session_start();

if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = $_POST['pass'];

   $select = $conn->prepare("SELECT * FROM `admins` WHERE email = ?");
   $select->execute([$email]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if ($select->rowCount() > 0) {
      if (password_verify($pass, $row['password'])) {
         $_SESSION['admin_id'] = $row['id'];
         header('location:adminHome2.php');
      } else {
         $message[] = 'Incorrect email or password!';
      }
   } else {
      $message[] = 'Incorrect email or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title> Admin Login</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
         <h3> Admin Login</h3>
         <input type="email" required placeholder="Enter your email" class="box" name="email">
         <input type="password" required placeholder="Enter your password" class="box" name="pass">
         <input type="submit" value="login" class="btn" name="submit">
         <a href="adminHome1.php" class="back-btn">Go Back</a>
      </form>

   </section>

</body>

</html>