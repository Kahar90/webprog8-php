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

<div class="shopping-cart">
  <div class="title">
    Shopping Cart
  </div>
  
  <div class="item">
    <tr>
        <td>Item name</td>
        <td>Item Quantity</td>
        <td>Action</td>
    </tr>
    
  </div>
 
</div>
