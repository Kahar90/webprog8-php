<?php 
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

// username and password sent from form
$username =$_SESSION["USER"];


$sql = "SELECT * FROM `usercart` WHERE user = '$username';";
$result = mysqli_query($conn, $sql);

?>


<?php
if (mysqli_num_rows($result) > 0){?>

    <form method="POST" action="order_item.php">
    <p>address: </p><input type="text" name="address"><br>
    <p>phone: </p><input type="text" name="phone">
        <input type="submit" value="submit">
    </form>

<?php } ?>

    