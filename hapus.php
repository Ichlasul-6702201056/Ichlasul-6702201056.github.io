<?php
include 'conn.php';

$id = $_GET['id'];

$query = "DELETE FROM snack1 WHERE id='$id'";
mysqli_query($conn, $query);

// return mysqli_affected_rows($conn);
header("location:here.php");
?>