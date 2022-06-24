<?php 
// DELETE FROM `usercart` WHERE itemname=""

session_start(); // Start up your PHP Session

echo $_SESSION["Login"]; //for session tracking purpose, can delete
$user = $_SESSION["USER"];

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") 
header("Location: login.php");

	  
	     $itemName = $_POST["itemName"];
		 $itemQtty = $_POST["quantity"];
	     
		 require ("config.php"); //read up on php includes https://www.w3schools.com/php/php_includes.asp
		 
	     $sql = "DELETE FROM `usercart` WHERE user='$user' AND itemname='$itemName' AND itemqtty='$itemQtty'" ;
                 
         
		 if (mysqli_query($conn, $sql)) {
			echo "<h3>Order deleted successfully</h3>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
        
		
	     mysqli_close($conn);
         echo "<p><a href='view_order.php'>Click here to go back</a></p>";

