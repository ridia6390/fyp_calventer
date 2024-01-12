<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Create an instance; passing `true` enables exceptions
if (isset($_POST["submit"])) {

  $mail = new PHPMailer(true);

  // Server settings
  $mail->isSMTP();                              // Send using SMTP
  $mail->Host = 'smtp.gmail.com';              // Set the SMTP server to send through
  $mail->SMTPAuth = true;                      // Enable SMTP authentication
  $mail->Username = '';                        // SMTP write your email
  $mail->Password = '';                        // SMTP password
  $mail->SMTPSecure = 'tls';                   // Enable implicit SSL encryption
  $mail->Port = 587;

  // Recipients
  $mail->setFrom($_POST["email"], $_POST["name"]); // Sender Email and name
  $mail->addAddress(''); // Add a recipient email  
  $mail->addReplyTo($_POST["email"], $_POST["name"]); // Reply to sender email

  // Content
  $mail->isHTML(true);               // Set email format to HTML
  $mail->Subject ="CONTACT INQUIRY";    // Email subject headings

  // Concatenate all the form fields to create the email body
  $mail->Body .= "First Name: " . $_POST["first_name"] . "<br>";
  $mail->Body .= "Last Name: " . $_POST["last_name"] . "<br>";
  $mail->Body .= "Email: " . $_POST["email"] . "<br>";
  $mail->Body .= "Subject: " . $_POST["subject"] . "<br>";
  $mail->Body .= "Message: " . $_POST["message"] . "<br>";
  
  // Additional headers and send the email
  $mail->send();

  echo
    " 
    <script> 
     alert('Message was sent successfully! We will get back to you very soon. Thank you :))');
     document.location.href = 'adminContact2.php';
    </script>
    ";
}
