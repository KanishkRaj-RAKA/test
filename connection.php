<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "hack");

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
