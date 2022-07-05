<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
$itemNameOld = $_POST["itemNameOld"];
$itemNameNew = $_POST["itemNameNew"];
$itemPrice = $_POST["itemPrice"];
$itemDescription = $_POST["itemDescription"];
$linkimg = $_POST["linkimg"];

$sql = "UPDATE `item` SET `itemname`='$itemNameNew',`itemdesc`='$itemDescription',`itemprice`='$itemPrice',`linkimg`='$linkimg' WHERE `itemname`='$itemNameOld'";


if (mysqli_query($conn, $sql)) {
    header("Location: main.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


 mysqli_close($conn);
 echo "<p><a href='main.php'>Click here to go back</a></p>";

?>