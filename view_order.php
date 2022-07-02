<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user = $_SESSION["USER"];

$sql="SELECT `user`, `itemname`, `itemqtty` FROM `usercart` WHERE user='$user' ";
$result = mysqli_query($conn, $sql);



?>
<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
<?php
if (mysqli_num_rows($result) > 0){ ?>

    <table width="600" border="1" cellspacing="0" cellpadding="3">
    <tr>
            <td align="center"><strong>Item Name</strong></td>
            <td align="center"><strong>Order quantity</strong></td>
            <td align="center"><strong>Action</strong></td>
             
     <?php while($rows = mysqli_fetch_assoc($result)) { ?>
            <tr>

            <form method="POST" name="deleteorder" action="deleteorder.php">
            <td><input type="hidden" name="itemName" value="<?php echo $rows['itemname']; ?>"><?php echo $rows['itemname']; ?></td>
            <td><input type="hidden" name="quantity" value="<?php echo $rows['itemqtty']; ?>"><?php echo $rows['itemqtty']; ?></td>
            <td><input type="submit" value="Delete order"></td>
            </form>

                
                <?php  }?>
                
    <?php
    }else {
        echo "<h1> No orders yet! go order something :D </h1>";
    }


?>

<div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="#home">Menu</a></li>
                <li><a href="#news">About us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li style="column-width:60px"><a href="view_order.php"><span class="material-symbols-outlined">shopping_cart</span></a></li>
            </ul>
        </div>
</div>

<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    CART
  </div>
 
  <!-- Product #1 -->
  <div class="item">
 
    <div class="image">
      <img src="img/nasikerabu.jpeg" width="80" length="150"/>
    </div>
 
    <div class="description">
      <span>NASI GURIH</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <span>Quantity</span>
      <span>2</span>
    </div>
 
    <div class="total-price">$549</div>

    <div class="delete-button"><a><span class="material-symbols-outlined">
    delete
    </span></a>
    </div>
  </div>
 
</div>