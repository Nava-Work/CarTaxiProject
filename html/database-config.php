<!-- process_signup.php -->


<?php

$connect = new mysqli("localhost","root","","citytaxi");

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
} 
?>
