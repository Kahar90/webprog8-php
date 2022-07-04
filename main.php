<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];


$sql="SELECT * FROM `item` WHERE 1";
$result = mysqli_query($conn, $sql);

?>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<?php
if ($user_level == 1) {
    // level 1 means it is admin
    ?>
    
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
        
            <div class="addnew">
                <form action="addnewitempage.php">
                    <button type="submit">+ Add item</button>
                </form>
            </div>
            <?php
    if (mysqli_num_rows($result) > 0){ ?>
        
            <div class="grid-container2">
            <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <form name="routeedititempage" method="POST" action="edititempage.php">
                    <div class="columns">
                        <ul class="price">
                            <li class="header"><input type="hidden" value="<?php echo $rows['itemname']; ?>" name="itemName"><?php echo $rows['itemname']; ?></li>
                            <li><input type="hidden" value="<?php echo $rows['linkimg']; ?>" name="linkImg"><img src="<?php echo $rows['linkimg']; ?>" alt="" width="300" height="200"></li>
                            <li class="grey"><input type="hidden" value="<?php echo $rows['itemprice']; ?>" name="itemPrice">RM <?php echo $rows['itemprice']; ?></li>
                            <li><input type="hidden" value="<?php echo $rows['itemdesc']; ?>" name="itemDesc"><?php echo $rows['itemdesc']; ?></li>
                            <li class="grey"><input type="submit" value="Edit"><input type="submit" onclick="alert('Item deleted Successfully')" value="Delete" formaction="deleteitem.php" ></li>
                        </ul>   
                    </div>

                </form>
                        <?php  }?>
            </div> 

    

        <?php } ?>

        
        
        

<?php


}else{
    ?>
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

    <?php
    if (mysqli_num_rows($result) > 0){ ?>

        <div class="grid-container2">
            <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <div class="columns">
                <form name="additemtocart" method="POST" action="insert_item.php">
                    <ul class="price">
                        <li class="header"><input type="hidden" name="itemName" value="<?php echo $rows['itemname'] ?>"><?php echo $rows['itemname'] ?></li>
                        <li><img src="<?php echo $rows['linkimg'] ?>" alt="" width="300" height="200"></li>
                        <li class="grey">RM <?php echo $rows['itemprice']; ?></li>
                        <li><?php echo $rows['itemdesc']; ?></li>
                        <li class="grey"><input type="number" id="quantity" name="quantity" min="1" max="5"> <input type="submit" value="Order" onclick="alert('Added to cart successfully')"></a></li>
                    
                    </ul>   
                </div>
                </form>
            <?php }?>
        </div>  
       <?php } ?>
<?php } ?>



