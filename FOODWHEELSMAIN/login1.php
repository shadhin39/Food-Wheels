<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="icon" href="images/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/l-style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
	  <?php
	  		if(isset($_SESSION)) 
    { 
        session_destroy(); 
    }
		 if(isset ($_SESSION['email']) ){
                header ("Location:login.php");
                exit; // stop further executing, very important
            }
			  ?>
	</head>

	<body>

		<div class="container">
			
			<div class="login-form">
				<h3 class="heading"> Registration Form</h3>
				<br></br>

				<form>
				
				<input type="text" name="username" placeholder="Username">
				<input type="Password" name="pass" placeholder="Password">
				<input type="submit" value="Login" class="lg-btn">
				</form>
				<br>
				<p class="text-white"> Don't have account? <a href="Registration.php">Click Here</a></p>

			</div>


		</div>

	</body>
</html>