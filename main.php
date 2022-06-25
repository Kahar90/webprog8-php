<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user_level =$_SESSION["LEVEL"];


$sql="SELECT * FROM `item` WHERE 1";
$result = mysqli_query($conn, $sql);

if ($user_level == 1) {
    // level 1 means it is admin
   
    if (mysqli_num_rows($result) > 0){ ?>

        <table width="600" border="1" cellspacing="0" cellpadding="3">
        <tr>
                <td align="center"><strong>Item Name</strong></td>
                <td align="center"><strong>Item Description</strong></td>
                <td align="center"><strong>Item Price</strong></td>
                <td align="center"><strong>Action</strong></td>
                 
         <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <form name="routeedititempage" method="POST" action="edititempage.php">
                    <td><input type="hidden" value="<?php echo $rows['itemname']; ?>" name="itemName"><?php echo $rows['itemname']; ?></td>
                    <td><input type="hidden" value="<?php echo $rows['itemdesc']; ?>" name="itemDesc"><?php echo $rows['itemdesc']; ?></td>
                    <td><input type="hidden" value="<?php echo $rows['itemprice']; ?>" name="itemPrice"><?php echo $rows['itemprice']; ?></td>
                    
                    <td><input type="submit" value="Edit"> <br> 
                    </form>
                    <form action="deleteitem.php" method="POST">
                    <input type="hidden" value="<?php echo $rows['itemname']; ?>" name="itemName">
                    <input type="hidden" value="<?php echo $rows['itemdesc']; ?>" name="itemDesc">
                    <input type="hidden" value="<?php echo $rows['itemprice']; ?>" name="itemPrice">
                    <input type="submit" value="Delete"></td>
                    </form>
                    
                   
                    
                    <?php  }?>
                    
        <?php
        }
        ?>
        <h1>Admin Menu</h1>
        <a href="index.php">
        <h1>Logout</h1>
        <button><a href="addnewitempage.php">Add item</a></button>
        
        

<?php


}else{
    if (mysqli_num_rows($result) > 0){ ?>

        <table width="600" border="1" cellspacing="0" cellpadding="3">
        <tr>
                <td align="center"><strong>Item Name</strong></td>
                <td align="center"><strong>Item Description</strong></td>
                <td align="center"><strong>Item Price</strong></td>
                <td align="center"><strong>Order quantity</strong></td>
                <td align="center"><strong>Action</strong></td>
                 
         <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <form name="additemtocart" method="POST" action="insert_item.php">
                    <td><input type="hidden" name="itemName" value="<?php echo $rows['itemname'] ?>"><?php echo $rows['itemname']; ?></td>
                    <td><?php echo $rows['itemdesc']; ?></td>
                    <td><?php echo $rows['itemprice']; ?></td>
                    <td><input type="number" id="quantity" name="quantity" min="1" max="5"></td>
                    <td><input type="submit" value="Order"></td>
                    </form>
                    
                    
                    <?php  }?>
                    
        <?php
        }
            
     ?>  
     <h1>Customer Menu</h1>
     <a href="view_order.php"><h1>Cart</h1></a> 
     <a href="index.php">
     <h1>Logout</h1>
     </a>
     <?php

     
}



            

mysqli_close($conn);


