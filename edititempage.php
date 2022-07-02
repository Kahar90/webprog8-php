<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
$itemName = $_POST["itemName"];
$itemPrice = $_POST["itemPrice"];
$itemDescription = $_POST["itemDesc"];



?>


<html>
    <head>
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/addnewitem.css">
    </head>
        <body>
            
        <div class="navbar">
			<div class="navbarname">
				<a><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
			</div>

			<div class="navbarbutton">
				<ul>
					<li><a href="#home">Menu</a></li>
					<li><a href="#news">About us</a></li>
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			</div>
		</div>

        <center>
        <h1>
            Edit Item <?php echo $itemName?>
        </h1>
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
                        <button class="submit" onclick="alert(confirm('Confirm to Update?'))">Update</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
    </body>

</html>