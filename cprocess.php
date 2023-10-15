<!---------------------TO CONNECT CONTACT PAGE-------->


<?php


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = mysqli_connect("localhost", "root", "", "calventer") or die("connection failed");
$sql = "INSERT INTO contact(First_name, Last_name, Email, Subject, Message) VALUES('{$firstname}','{$lastname}','{$email}','{$subject}','{$message}')";
$result = mysqli_query($conn, $sql) or die("Connection Failed");
header("location: http://localhost/calventer/contact.php ");
mysqli_close($conn);

?>