<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `events` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: events.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
