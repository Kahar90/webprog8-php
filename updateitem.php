<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
$itemNameOld = $_POST["itemNameOld"];
$itemNameNew = $_POST["itemNameNew"];
$itemPrice = $_POST["itemPrice"];
$itemDescription = $_POST["itemDescription"];

$sql = "UPDATE `item` SET `itemname`='$itemNameNew',`itemdesc`='$itemDescription',`itemprice`='$itemPrice' WHERE `itemname`='$itemNameOld'";

echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "<h3>New record created successfully</h3>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


 mysqli_close($conn);
 echo "<p><a href='main.php'>Click here to go back</a></p>";

?>