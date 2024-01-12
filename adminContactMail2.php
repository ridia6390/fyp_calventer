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
  $mail->Subject ="CONTACT INQUIRY";   

  // Email Body
  $mail->Body .= "First Name: " . $_POST["first_name"] . "<br>";
  $mail->Body .= "Last Name: " . $_POST["last_name"] . "<br>";
  $mail->Body .= "Email: " . $_POST["email"] . "<br>";
  $mail->Body .= "Subject: " . $_POST["subject"] . "<br>";
  $mail->Body .= "Message: " . $_POST["message"] . "<br>";
  
  // Sending the email
  $mail->send();

  echo
    " 
    <script> 
     alert('Message was sent successfully! We will get back to you very soon. Thank you :))');
     document.location.href = 'adminContact2.php';
    </script>
    ";
}
