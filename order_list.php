<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
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

    <div class="shopping-cart">
        <!-- Title -->
        <div class="title">
            LIST OF ORDERED ITEM
        </div>   
    
        <form method="POST" name="deleteorder" action="deleteorder.php">
                
            <!-- Product #1 -->
            <div class="item">
                <tr>
                    <td>Rafi</td>
                    <td>surabaya</td>
                    <td>081223938</td>
                    <td>nasi goreng</td>
                    <td>20</td>
                </tr>
            </div>
        </form>
    </div>
</body>
</html>