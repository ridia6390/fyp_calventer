<?php
require_once('php/config.php');
$id    		= $_REQUEST['id']; 

$sqlDeleteEvent = ("DELETE FROM calendar WHERE  id='" .$id. "'");
$resultProd = mysqli_query($conn, $sqlDeleteEvent);

?>
  