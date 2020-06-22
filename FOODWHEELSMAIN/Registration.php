
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link rel="icon" href="images/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/rstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		
	  
	

	</head>
	<body>


		<?php
      $mysqli = mysqli_connect("localhost","root","","foodwheels");
      $errors = array(); 
	if(isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		
		
		$email = $_POST['email'];
		
		
		$password = $_POST['password'];
		
		
		$number = $_POST['number'];
			
		$zip = $_POST['zip'];
		
		
		$gender = $_POST['Gender'];

       $secondname = $_POST['secondname'];
       

       $conemail = $_POST['conemail'];
       

       $conpassword = $_POST['conpassword'];

       $address = $_POST['address'];

		if(empty($firstname))
		{
			array_push($errors, "User Name is required!");
		}
		else {

    		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
    	 		array_push($errors , "Only letters and white space allowed in firstname");
    		}
 		}
		if(empty($secondname))
		{
			array_push($errors, "secondname is required!");
		}
		else {

    		if (!preg_match("/^[a-zA-Z ]*$/",$secondname)) {
    	 		array_push($errors , "Only letters and white space allowed in secondname");
    		}
 		}
    
    	if(empty($email))
		{
			array_push($errors, "Email is required!");
		}
		else {
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      array_push($errors, "Invalid email format");
		    }
		  }
		
		
		$query = "SELECT * FROM rest WHERE Email='".$email."'";
		$result = mysqli_query($mysqli, $query);
		if(mysqli_num_rows($result)>0)
		{
			array_push($errors, "Already registered email!");
		}
		
		if(empty($number))
		{
			array_push($errors, "Phone number is required!");
		}
		else{
			$number    = preg_match('@[0-9]@', $number);

			if(!$number || strlen($number) == 11) {
			    array_push($errors, 'Phone number should contain 11 digits !');
			}
		}
		
		if(empty($address))
		{
			array_push($errors, "Address is required!");
		}
		if(empty($password))
		{
			array_push($errors, "Password is required!");
		}
		else
		{

			$uppercase = preg_match('@[A-Z]@', $password);
			$lowercase = preg_match('@[a-z]@', $password);
			$number    = preg_match('@[0-9]@', $password);

			if(!$uppercase || !$lowercase || !$number || strlen($password) < 6) {
			    array_push($errors, 'Password should be at least 6 characters in length and should include at least one upper case letter, one number!');
			}

		}
	    //$mysqli->query("ALTER TABLE `food` AUTO_INCREMENT=1");
	    if($email!=$conemail)
			
        {
			array_push($errors, "Emails did not match!");
		}
		
		if($password!=$conpassword)
			
        {
			array_push($errors, "Password did not match!");
		}
		
		if(count($errors)==0)
		{
			$password = md5($password);
			$conpassword = md5($conpassword);
		   $damp="INSERT INTO rest(firstname, email, password, number, zip, secondname, conemail, conpassword,gender, address) VALUES ('$firstname','$email','$password','$number','$zip','$secondname','$conemail','$conpassword','$gender','$address')"	;
          $sql = "INSERT INTO rest (firstname, email, password, number, zip, secondname, conemail, conpassword, gender, address) VALUES ('Thom', 'Vial', 'thom.v@some.com')";		  
		 mysqli_query($mysqli,$damp);
		 header("Location: login.php");
		}
		
}
		?>
		



	<div class="title"><center><h1> Sign Up Form</h1></center></div><br>
	<img src="images/r8.png" alt="logo" class="logo">
	   			<?php 
				if(count($errors)>0 && isset($_POST['submit'])): ?>
				<div class="error ">
					<?php foreach ($errors as $error): ?>
						<p style="color: crimson;"><?php echo $error;?></p>
						
					<?php endforeach?>
				</div>
			<?php endif?>

		<div class="container">

			<div class="signup-form">
				
				<form action="" method="post">
				<div class ="form-left">
					<input type="text" name="firstname" placeholder="First Name:">
					<input type="email" name="email" placeholder="Email Id:">
					<input type="password" name="password" placeholder="Password:">
					<input type="number" name="number" placeholder="Phone Number:">
					<input type="text" name="zip" placeholder="Zip:">

				
			       <div class="gender">
				   
				   <label for="gender">Gender</label>
		    	
			        <input type="radio" name="Gender" value="Male" >Male   
					<input type="radio" name="Gender" value="Female" >Female   
					<input type="radio" name="Gender" value="other" >Other   
					</div>


					


				</div>
				<div class="form-right">
				<input type="text" name="secondname" placeholder="Second Name:">
				<input type="email" name="conemail" placeholder="Confirm Email Id:">
				<input type="password" name="conpassword" placeholder="Confirm Password:">
				<input type="text" name="address" placeholder="Address:">
			
			
				

			   <input type="submit" name="submit" class="submit-btn"> </a>
			    <p style="margin-top: 70px;color: 	#006400;font-size:20px;">
		   		 	Already Registered? <a href="login.php" style="margin-top: 100px;font-size:20px;">Log in</a>
		   		 </p>
				</div>
				</form>

				</div>

			
			




		</div>
		
</html>