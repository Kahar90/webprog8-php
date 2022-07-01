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
					<li style="column-width:60px"><a href="#cart"><span class="material-symbols-outlined">shopping_cart</span></a></li>
				</ul>
			</div>
		</div>

            <h1>
                Edit Item <?php echo $itemName?>
            </h1>
            
            <form method="POST" name="updateitem" action="updateitem.php">
                <input type="hidden" value="<?php echo $itemName?>" name="itemNameOld">
                <label for="itemName">Item Name:</label>
                <input type="text" name="itemNameNew" value="<?php echo $itemName?>">
                <br>
                <label for="itemPrice">Item Price:</label>
                <input type="text" name="itemPrice" value="<?php echo $itemPrice?>">
                <br>
                <label for="itemDescription">Item Description:</label>
                <input type="text" name="itemDescription" value="<?php echo $itemDescription?>">
                <br>                            
                <br>
                <input type="submit" value="Update">
            </form>
            <h1><a href="main.php">Back</a></h1>
        </body>
    </head>
</html>






