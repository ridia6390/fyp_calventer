<!---------------------------TO CONNECT REGISTER AND LOGIN------------------------------->  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "calventer";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>