	<html>
	<head>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<title>Login</title>
	</head>

	<body style="overflow: hidden;">

		<div class="grid-container">
			<div>
				<img src="img/KAK SU.png" width="1450">

			</div>
			<div class="loginform">
				
				<h1>Log In</h1>

				<form method="post" action="check_login.php">

					<div class="container">
						<label for="uname"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
							
						<button type="submit">Login</button>
						<label>
						<input type="checkbox" name="remember"> Remember me
						</label>
					</div>

					<div class="container">
						<button type="button" class="cancelbtn">Cancel</button>
						<span class="psw"><a href="#">Forgot password?</a></span>
					</div>
				</form>
			</div>
		</div>
			


	</body>
	</html>
	

 