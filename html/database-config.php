<!-- process_signup.php -->

<?php

$conn = mysqli_connect("localhost",  "root",  "",  "citytaxi");  //"14_cartaxi"-> database name based on ur db u can change in ur local code

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
} 
?>
