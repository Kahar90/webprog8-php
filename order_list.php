<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

$sql = "SELECT credentials.name, credentials.address,credentials.phone,usercart.itemname, usercart.itemqtty\n"

    . "FROM credentials\n"

    . "JOIN usercart ON credentials.username=usercart.user;";
    
    $result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/order-list.css">
</head>
<body>
    <div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="main.php">Menu</a></li>
                <li><a href="about-us-admin.php">About us</a></li>
                <li><a href="contact-us-admin.php">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="table">
            <div class="table-header">
                <div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
                <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Address</a></div>
                <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Phone Number</a></div>
                <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Item Name</a></div>
                <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Item Quantity</a></div>
            </div>

            <div class="table-content">	
                
                <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                    <div class="table-row">		
                        <div class="table-data"><?php echo $rows['name']; ?></div>
                        <div class="table-data"><?php echo $rows['address']; ?></div>
                        <div class="table-data"><?php echo $rows['phone']; ?></div>
                        <div class="table-data"><?php echo $rows['itemname']; ?></div>
                        <div class="table-data"><?php echo $rows['itemqtty']; ?></div>
                    </div>

                <?php } ?>
                
            </div>	
        </div>
    </div>
</body>
</html>




