<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
$itemName= $_POST["itemName"];
$itemPrice = $_POST["itemPrice"];
$itemDescription = $_POST["itemDescription"];
$linkimg = $_POST["linkimg"];

$sql = "INSERT INTO `item`(`itemname`, `itemdesc`, `itemprice`, `linkimg`) VALUES ('$itemName','$itemDescription','$itemPrice', '$linkimg')";

if (mysqli_query($conn, $sql)) {
    header("Location: main.php");
} else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


 mysqli_close($conn);
 

?>

<input type="hidden">