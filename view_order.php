<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user = $_SESSION["USER"];

$sql = "SELECT item.itemname, item.linkimg,usercart.user,usercart.itemqtty,item.itemprice\n"

    . "  FROM usercart JOIN item ON item.itemname = usercart.itemname\n"

    . "  WHERE usercart.user=\"customer\";";
$result = mysqli_query($conn, $sql);



?>
<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
<?php
if (mysqli_num_rows($result) > 0){ ?>

    <div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="main.php">Menu</a></li>
                <li><a href="#news">About us</a></li>
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
     <?php while($rows = mysqli_fetch_assoc($result)) { ?>
            <form method="POST" name="deleteorder" action="deleteorder.php">
              
                <!-- Product #1 -->
                <div class="item">
              
                  <div class="image">
                    <img src="<?php echo $rows['linkimg']; ?>" width="80" length="150"/>
                  </div>
              
                  <div class="description">
                    <input type="hidden" name="itemName" value="<?php echo $rows['itemname']; ?>">
                    <?php echo $rows['itemname']; ?>
                  </div>
              
                  <div class="quantity">
                    <input type="hidden" name="quantity" value="<?php echo $rows['itemqtty']; ?>">
                    <?php echo $rows['itemqtty']; ?>
                  </div>
              
                  <div class="total-price">
                    <input type="hidden" name="itemPrice" value="<?php echo $rows['itemprice']; ?>"> 
                    RM 
                    <?php echo $rows['itemprice']; ?>
                
                  </div>

                  <div class="delete-button">
                    <button type="submit" class="material-symbols-outlined">delete</button>
                  </div>
                </div>
                            
            </form>
    <?php  }?>

          <form action="fill_credentials.php">
            <button type="submit" class="submit-button">SUBMIT</button>
          </form>  
          
             

    </div>
 
                
    <?php
    }else { ?>
        <div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="main.php">Menu</a></li>
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
<?php
    }


?>



