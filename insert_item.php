<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
session_start(); // Start up your PHP Session

echo $_SESSION["Login"]; //for session tracking purpose, can delete
$user = $_SESSION["USER"];

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") 
header("Location: login.php");

	  
	     $itemName = $_POST["itemName"];
	     $itemQtty = $_POST["quantity"];
	     
	     
		 require ("config.php"); //read up on php includes https://www.w3schools.com/php/php_includes.asp
		 
	     $sql = "INSERT INTO `usercart` (`user`, `itemname`, `itemqtty`) VALUES ('$user', '$itemName', '$itemQtty')" ;
         
        // mysqli_query($conn, $sql) 
          
         
		 if (mysqli_query($conn, $sql)) {
			header("Location: main.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
        
		
	     mysqli_close($conn);

