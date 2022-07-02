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
  <!-- Title -->
  <div class="title">
    Shopping Bag
  </div>
 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-1.png" alt="" />
    </div>
 
    <div class="description">
      <span>Common Projects</span>
      <span>Bball High</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$549</div>
  </div>
 
  <!-- Product #2 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-2.png" alt=""/>
    </div>
 
    <div class="description">
      <span>Maison Margiela</span>
      <span>Future Sneakers</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$870</div>
  </div>
 
  <!-- Product #3 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="item-3.png" alt="" />
    </div>
 
    <div class="description">
      <span>Our Legacy</span>
      <span>Brushed Scarf</span>
      <span>Brown</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price">$349</div>
  </div>
</div>
