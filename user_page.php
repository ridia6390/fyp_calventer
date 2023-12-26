<?php

include 'admins.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>user page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style/profile.css">

</head>

<body>
   
   <section class="profile-container">

      <?php
      $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>

      <div class="profile">
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <h3>
            <?= $fetch_profile['name']; ?>
         </h3>
         <div class="btn-container">
            <a href="user_profile_update.php" class="btn">Profile</a>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>

   </section>
   <script src="js/home.js"></script>
</body>

</html>