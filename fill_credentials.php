<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/addnewitem.css">
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
                <li><a href="main.php">Menu</a></li>
                <li><a href="about-us.php">About us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li style="column-width:60px"><a href="view_order.php"><span class="material-symbols-outlined">shopping_cart</span></a></li>
            </ul>
        </div>
    </div>

    <h2>Fill Credentials</h2>
    <center>
        <table>
            <thead>

            </thead>
            <tbody>
            <form method="POST" name="updateitem" action="additem.php">
                <tr>
                    <td><b>Address</b></td>
                    <td>:</td>
                    <td><textarea cols="20" rows="3" name="address"></textarea></td>
                </tr>
                <tr>
                    <td><b>Phone</b></td>
                    <td>:</td>
                    <td><input type="number" name="phone"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="go-back"><a href="view_order.php">Go Back</a></button>
                        <button class="submit" onclick="alert('Confirm to Submit?')">Submit</button>
                    </td>
                </tr>
                </form>
            </tbody>
        </table>
    </center>
</body>
</html>