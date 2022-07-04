<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user = $_SESSION["USER"];

<<<<<<< Updated upstream
$sql="SELECT `user`, `itemname`, `itemqtty` FROM `usercart` WHERE user='$user' ";
=======
$sql = "SELECT item.itemname, item.linkimg,usercart.user,usercart.itemqtty,item.itemprice\n"

    . "  FROM usercart JOIN item ON item.itemname = usercart.itemname\n"

    . "  WHERE usercart.user=\"$user\";";
>>>>>>> Stashed changes
$result = mysqli_query($conn, $sql);



?>
<head>
    <link rel="stylesheet" href="css/cart.css">
</head>
<?php
if (mysqli_num_rows($result) > 0){ ?>

<<<<<<< Updated upstream
    <table width="600" border="1" cellspacing="0" cellpadding="3">
    <tr>
            <td align="center"><strong>Item Name</strong></td>
            <td align="center"><strong>Order quantity</strong></td>
            <td align="center"><strong>Action</strong></td>
             
=======
    <div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="main.php">Menu</a></li>
                <li><a href="about-us.php">About us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li style="column-width:60px"><a href="view_order.php"><span class="material-symbols-outlined">shopping_cart</span></a></li>
            </ul>
        </div>
    </div>

    <div class="shopping-cart">
                <!-- Title -->
                <div class="title">
                  CART
                </div>   
>>>>>>> Stashed changes
     <?php while($rows = mysqli_fetch_assoc($result)) { ?>
            <tr>

            <form method="POST" name="deleteorder" action="deleteorder.php">
            <td><input type="hidden" name="itemName" value="<?php echo $rows['itemname']; ?>"><?php echo $rows['itemname']; ?></td>
            <td><input type="hidden" name="quantity" value="<?php echo $rows['itemqtty']; ?>"><?php echo $rows['itemqtty']; ?></td>
            <td><input type="submit" value="Delete order"></td>
            </form>
<<<<<<< Updated upstream

                
                <?php  }?>
=======
            <?php  }?>     
            <a href="fill_credentials.php">credentials</a>          
    </div>
>>>>>>> Stashed changes
                
    <?php
    }else {
        echo "<h1> No orders yet! go order something :D </h1>";
    }


?>
