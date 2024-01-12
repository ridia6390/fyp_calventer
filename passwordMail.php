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
  $mail->Subject ="PASSWORD RESET REQUEST";   

  // Email Body
  $mail->Body .= "Username: " . $_POST["name"] . "<br>";
  $mail->Body .= "Email: " . $_POST["email"] . "<br>";
 

  // Sending the email
  $mail->send();

  echo
    " 
    <script> 
     alert('Message was sent successfully ! Check your email to reset your password');
     document.location.href = 'viewerLogin.php';
    </script>
    ";
}
