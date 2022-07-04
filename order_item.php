<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$username =$_SESSION["USER"];
$address =$_POST["address"];
$phone = $_POST["phone"];

$sql = "INSERT INTO `credentials`(`username`, `address`, `phone`) VALUES ('$username','$address','$phone')";


if (mysqli_query($conn, $sql)) {
    header("Location: main.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


 mysqli_close($conn);

?>