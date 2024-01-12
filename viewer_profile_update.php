<?php
include 'admins.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:viewerLogin.php');
}

if (isset($_POST['update'])) {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

    $update_profile = $conn->prepare("UPDATE `admins` SET name = ?, email = ? WHERE id = ?");
    $update_profile->execute([$name, $email, $admin_id]);

    if ($update_profile) {
        $message[] = 'Profile information has been updated!';
    }

    $old_image = $_POST['old_image'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = 'uploaded_img/' . $image;

    if (!empty($image)) {

        if ($image_size > 2000000) {
            $message[] = 'Image size is too large';
        } else {
            $update_image = $conn->prepare("UPDATE `admins` SET image = ? WHERE id = ?");
            $update_image->execute([$image, $admin_id]);

            if ($update_image) {
                move_uploaded_file($image_tmp_name, $image_folder);
                unlink('uploaded_img/' . $old_image);
                $message[] = 'Image has been updated!';
            }
        }
    }

    $previous_pass = $_POST['previous_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if (!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)) {
        $select_password = $conn->prepare("SELECT password FROM `admins` WHERE id = ?");
        $select_password->execute([$admin_id]);
        $row = $select_password->fetch(PDO::FETCH_ASSOC);

        if (password_verify($previous_pass, $row['password'])) {
            if ($new_pass === $confirm_pass) {
                $hashedPassword = password_hash($new_pass, PASSWORD_DEFAULT);
                $update_password = $conn->prepare("UPDATE `admins` SET password = ? WHERE id = ?");
                $update_password->execute([$hashedPassword, $admin_id]);
                $message[] = 'Password has been updated!';
            } else {
                $message[] = 'New password and confirm password do not match!';
            }
        } else {
            $message[] = 'Incorrect previous password!';
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

    <title>Update Viewer Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style/uprofile.css">

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

    <h1 class="title"> Update Viewer Profile </h1>

    <section class="update-profile-container">

        <?php
        $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
        $select_profile->execute([$admin_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
            <div class="flex">
                <div class="inputBox">
                    <span>Username</span>
                    <input type="text" name="name" required class="box" placeholder="Enter your name"
                        value="<?= $fetch_profile['name']; ?>">
                    <span>Email</span>
                    <input type="email" name="email" required class="box" placeholder="Enter your email"
                        value="<?= $fetch_profile['email']; ?>">
                    <span>Profile Image</span>
                    <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
                    <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
                </div>
                <div class="inputBox">
                    <span>Old Password</span>
                    <input type="password" class="box" name="previous_pass" placeholder="Enter previous password">
                    <span>New Password</span>
                    <input type="password" class="box" name="new_pass" placeholder="Enter new password">
                    <span>Confirm Password</span>
                    <input type="password" class="box" name="confirm_pass" placeholder="Confirm new password">
                </div>
            </div>
            <div class="flex-btn">
                <a href="viewerHome2.php" class="option-btn">go back</a>
                <input type="submit" value="update profile" name="update" class="btn">
            </div>
        </form>

    </section>

</body>

</html>
