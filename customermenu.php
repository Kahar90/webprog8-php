<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cust Menu</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="navbar">
        <div class="navbarname">
            <a><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="#home">Menu</a></li>
                <li><a href="#news">About us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li style="column-width:60px"><a href="#cart"><span class="material-symbols-outlined">shopping_cart</span></a></li>
            </ul>
        </div>
    </div>

    <?php
        session_start(); // Start up your PHP Session
 
        require('config.php');//read up on php includes https://www.w3schools.com/php/php_includes.asp
        
        $sql="SELECT * FROM item";
        $result = mysqli_query($conn, $sql);
    ?>

    <div class="grid-container">
        <?php while($rows = mysqli_fetch_assoc($result)) { ?>
            <div class="columns">
                <ul class="price">
                    <li class="header"><?php echo $rows['itemname'] ?></li>
                    <li><img src="<?php echo $rows['linkimg'] ?>" alt="" width="300"></li>
                    <li class="grey">RM <?php echo $rows['itemprice']; ?></li>
                    <li><?php echo $rows['itemdesc']; ?></li>
                    <li class="grey"><input type="number" id="quantity" name="quantity" min="1" max="5"> <a href="#" class="button">Order Now</a></li>
                   
                </ul>   
            </div> 
        
        <?php }?>
    </div>

    



</body>
</html>