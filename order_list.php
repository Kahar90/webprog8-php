<?php
session_start(); // Start up your PHP Session
 
require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp

$sql = "SELECT credentials.username, credentials.address,credentials.phone,usercart.itemname, usercart.itemqtty\n"

    . "FROM credentials\n"

    . "JOIN usercart ON credentials.username=usercart.user;";
    
    $result = mysqli_query($conn, $sql);

?>
<?php while($rows = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['address']; ?></td>
        <td><?php echo $rows['phone']; ?></td>
        <td><?php echo $rows['itemname']; ?></td>
        <td><?php echo $rows['itemqtty']; ?></td>        
    </tr>
    <br>

<?php } ?>


   