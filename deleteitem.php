<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
$itemName= $_POST["itemName"];
$itemPrice = $_POST["itemPrice"];
$itemDescription = $_POST["itemDesc"];

$sql = "DELETE FROM `item` WHERE `itemname` = '$itemName'";

echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "<h3>Deleted Item Succesfully</h3>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


 mysqli_close($conn);
 echo "<p><a href='main.php'>Click here to go back</a></p>";

?>