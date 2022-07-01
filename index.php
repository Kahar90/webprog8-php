	<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<title>Login</title>
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

			
		<form method="post" action="check_login.php">

			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
					
				<button type="submit">Login</button>
				<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>

	</body>
	</html>
	

 