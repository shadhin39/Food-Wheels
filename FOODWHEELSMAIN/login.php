<?php
	session_start();


		$email='';
		$password='';
		$firstname ='';
		$number='';

		$errors=array();
       $db=mysqli_connect("localhost","root","","foodwheels");
	if (isset($_POST['Login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM rest WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);
            	
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.php');
			}else {
				array_push($errors, "Wrong useremail/password combination");
			}
		}
	}	
	
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="icon" href="images/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/l-style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
	

	
	</head>

	<body>
	
		<section style="background-color: black;margin-block: -21px;padding-top: 44px;">
			<h1 style="text-align: center;color: crimson;font-style: oblique;font-family: initial;font-size: 65px;"><a href="index.php"> FOOD WHEELS</a></h1>
		</section>
		
		

    
		<div class="container">
		
			
			<div class="login-form">
				<h3 class="heading"> Login Form</h3>
				<br></br>
               <?php if(count($errors)>0 && isset($_POST['Login'])): ?>
				<div class="error ">
					<?php foreach ($errors as $error): ?>
						<p style="color: red;"><?php echo $error;?></p>
						
					<?php endforeach?>
				</div>
			<?php endif?>	
				 <form action="" method="post" >
				
				<input type="text" name="email" placeholder="Enter Your Email">
				<input type="Password" name="password" placeholder="Enter Your Password">
				<input type="submit" name="Login" value="Login" class="lg-btn">
				</form>
				<br>
				<p class="text-white"> Don't have a account? <a href="Registration.php">Register Here</a></p>

			</div>


		</div>

	</body>
</html>