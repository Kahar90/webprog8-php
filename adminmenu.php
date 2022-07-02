<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin menu</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="navbar">
        <div class="navbarname">
            <a href="index.php"><span style="color:#1D8348">KAK SU</span><span style="color:#2E86C1">NASI KERABU</span></a>  
        </div>

        <div class="navbarbutton">
            <ul>
                <li><a href="#home">Menu</a></li>
                <li><a href="#news">About us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="grid-container2">
    <form name="additemtocart" method="POST" action="insert_item.php">
    <div class="columns">
        <ul class="price">
            <li class="header">NASI KANDAR</li>
            <li><img src="img/nasikerabu.jpeg" alt="" width="300" height="200"></li>
            <li class="grey">RM SEKIAN</li>
            <li>NASI PUNYA PAK KANDAR</li>
            <li class="grey"><input type="submit" value="Edit"><input type="submit" value="Delete"></a></li>
        </ul>   
    </div>
</form>

    </div>  

</body>
</html>