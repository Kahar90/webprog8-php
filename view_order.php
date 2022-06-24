<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$user = $_SESSION["USER"];

$sql="SELECT `user`, `itemname`, `itemqtty` FROM `usercart` WHERE user='$user' ";
$result = mysqli_query($conn, $sql);

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
    }


?>

<html>
    <head>
        <body>
            <h1>Your Order</h1>
            <a href="main.php"><h1>Back</h1></a>
            <br>

        </body>
    </head>
</html>