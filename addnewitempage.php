<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
// $itemName = $_POST["itemName"];
// $itemPrice = $_POST["itemPrice"];
// $itemDescription = $_POST["itemDesc"];



?>


<html>
    <head>
        <body>
            <h1>
                Add New Item
            </h1>
            
            <form method="POST" name="updateitem" action="additem.php">
                <label for="itemName">Item Name:</label>
                <input type="text" name="itemName">
                <br>
                <label for="itemPrice">Item Price:</label>
                <input type="text" name="itemPrice">
                <br>
                <label for="itemDescription">Item Description:</label>
                <input type="text" name="itemDescription">
                <br>
                <label for="itemDescription">Link Image:</label>
                <input type="text" name="linkimg">
                <br>                            
                <br>
                <input type="submit" value="Add">
            </form>
            <h1><a href="main.php">Back</a></h1>
        </body>
    </head>
</html>