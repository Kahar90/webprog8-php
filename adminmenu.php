<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin menu</title>
</head>
<body>
    <div class="grid-container2">
        
    <div class="columns">
        <ul class="price">
            <li class="header"><input type="hidden" name="itemName" value="<?php echo $rows['itemname'] ?>"><?php echo $rows['itemname'] ?></li>
            <li><img src="img/nasikerabu.jpeg" alt="" width="300" height="200"></li>
            <li class="grey">RM <?php echo $rows['itemprice']; ?></li>
            <li><?php echo $rows['itemdesc']; ?></li>
            <li class="grey"><input type="number" id="quantity" name="quantity" min="1" max="5"> <input type="submit" value="Order"></a></li>
        
        </ul>   
    </div>

    </div>  

</body>
</html>