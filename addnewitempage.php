<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
// $itemName = $_POST["itemName"];
// $itemPrice = $_POST["itemPrice"];
// $itemDescription = $_POST["itemDesc"];



?>

<head>
    <link rel="stylesheet" href="css/addnewitem.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="#home">Menu</a></li>
                <li><a href="#news">About us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <h2>Add New Item</h2>
    <center>
        <table>
            <thead>

            </thead>
            <tbody>
                <tr>
                    <td><b>Item Name</b></td>
                    <td>:</td>
                    <td><input type="text" placeholder="Item Name"></td>
                </tr>
                <tr>
                    <td><b>Item Price</b></td>
                    <td>:</td>
                    <td><input type="number" placeholder="Price"></td>
                </tr>
                <tr>
                    <td><b>Item Description</b></td>
                    <td>:</td>
                    <td><textarea name="" id="" cols="20" rows="3" placeholder="Description"></textarea></td>
                </tr>
                <tr>
                    <td><b>Image Link</b></td>
                    <td>:</td>
                    <td><input type="text" placeholder="Image Link"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="go-back"><a href="main.php">Go Back</a></button>
                        <button class="submit" onclick="alert(confirm('Confirm to Submit?'))">Submit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</body>