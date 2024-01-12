<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST["submit"])) {

  $mail = new PHPMailer(true);

  // Server settings
  $mail->isSMTP();                              
  $mail->Host = 'smtp.gmail.com';              
  $mail->SMTPAuth = true;                      
  $mail->Username = '';                         
  $mail->Password = '';                         
  $mail->SMTPSecure = 'tls';                   
  $mail->Port = 587;

  // Recipients
  $mail->setFrom($_POST["email"], $_POST["name"]); 
  $mail->addAddress(''); 
  $mail->addReplyTo($_POST["email"], $_POST["name"]);

  // Content
  $mail->isHTML(true);              
  $mail->Subject ="EVENT DETAILS";    

  // Email Body
  $mail->Body .= "Email: " . $_POST["email"] . "<br>";
  $mail->Body .= "Name: " . $_POST["name"] . "<br>";
  $mail->Body .= "Title: " . $_POST["title"] . "<br>";
  $mail->Body .= "Date: " . $_POST["date"] . "<br>";
  $mail->Body .= "Start Time: " . $_POST["start_time"] . "<br>";
  $mail->Body .= "End Time: " . $_POST["end_time"] . "<br>";
  $mail->Body .= "Theme: " . $_POST["theme"] . "<br>";
  $mail->Body .= "Dress Code: " . $_POST["dress_code"] . "<br>";
  $mail->Body .= "Venue: " . $_POST["venue"] . "<br>";
  $mail->Body .= "Description: " . $_POST["description"] . "<br>";
  
// Attaching the poster image to the email
if (!empty($_FILES["poster"]["tmp_name"])) {
  $allowedFormats = ['jpg', 'jpeg', 'png']; 

  $posterPath = $_FILES["poster"]["tmp_name"];
  $imageInfo = getimagesize($posterPath);

  // Checking if the file is an image and has an allowed format
  if ($imageInfo !== false && in_array(strtolower($imageInfo['mime']), ['image/jpeg', 'image/png'])) {
      $mail->addAttachment($posterPath, 'Poster Image', 'base64', $imageInfo['mime']);
      $mail->Body .= "Poster: <img src='cid:Poster Image'><br>";
  } else {
      // Invalid file format
      $message[] = 'Invalid file format for the poster. Please upload a valid JPG or PNG image.';
  }
}

  // Sending the email
  $mail->send();

  echo
    " 
    <script> 
     alert('Message was sent successfully ! You may check the calendar in a while');
     document.location.href = 'viewerCalendar2.php';
    </script>
    ";
}
