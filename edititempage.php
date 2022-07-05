<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];
$itemName = $_POST["itemName"];
$itemPrice = $_POST["itemPrice"];
$itemDescription = $_POST["itemDescription"];
$linkimg = $_POST["linkImg"];

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
					<li><a href="main.php">Menu</a></li>
					<li><a href="#news">About us</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
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
            <form method="POST" name="updateitem" action="updateitem.php">
            <input type="hidden" value="<?php echo $itemName?>" name="itemNameOld">
                <tr>
                    <td><b>Item Name</b></td>
                    <td>:</td>
                    <td><input type="text" name="itemNameNew" value="<?php echo $itemName?>"></td>
                </tr>
                <tr>
                    <td><b>Item Price</b></td>
                    <td>:</td>
                    <td><input type="number" name="itemPrice" value="<?php echo $itemPrice?>"></td>
                </tr>
                <tr>
                    <td><b>Item Description</b></td>
                    <td>:</td>
                    <td><textarea cols="20" rows="3" name="itemDescription"><?php echo $itemDescription?></textarea></td>
                </tr>
                <tr>
                    <td><b>Image Link</b></td>
                    <td>:</td>
                    <td><input type="text" name="linkimg" value="<?php echo $linkimg?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="go-back"><a href="main.php">Go Back</a></button>
                        <button class="submit" onclick="alert('Confirm to Submit?')">Submit</button>
                    </td>
                </tr>
                </form>
            </tbody>
        </table>
    </center>
    </body>

</html>