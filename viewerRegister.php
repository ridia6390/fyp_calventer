<?php

include 'admins.php';

if(isset($_POST['submit'])){
   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $pass = $_POST['pass']; // Password is not sanitized to allow special characters

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   // Validate password length
   if (strlen($pass) < 8) {
      $message[] = 'Password must be at least 8 characters long!';
   } else {
      $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

      $select = $conn->prepare("SELECT * FROM `admins` WHERE email = ?");
      $select->execute([$email]);

      if($select->rowCount() > 0){
         $message[] = 'User already exists!';
      } else {
         if($image_size > 2000000){
            $message[] = 'Image size is too large!';
         } else {
            $insert = $conn->prepare("INSERT INTO `admins`(name, email, password, image) VALUES(?,?,?,?)");
            if ($insert->execute([$name, $email, $hashedPassword, $image])) {
               move_uploaded_file($image_tmp_name, $image_folder);
               $messager[] = 'Registered successfully!';
               // Uncomment the line below to redirect after successful registration
               // header('location:viewerLogin.php');
            } else {
               $message[] = 'Error registering user. Please try again.';
            }
         }
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style/register.css">

</head>
<body>



<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }

   if(isset($messager)){
      foreach($messager as $messager){
         echo '
         <div class="messager">
            <span>'.$messager.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
   
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3> Club Admin Registration</h3>
      <input type="text" required placeholder="Enter your username" class="box" name="name">
      <input type="email" required placeholder="Enter your email" class="box" name="email">
      <input type="password" required placeholder="Enter your password" class="box" name="pass">
      <input type="password" required placeholder="Confirm your password" class="box" name="cpass">
      <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
      <input type="submit" value="register" class="btn" name="submit">
      <p>Already have an account? <a href="viewerLogin.php">Login</a></p>
      
   </form>

</section>

</body>
</html>