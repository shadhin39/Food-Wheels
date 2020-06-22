<?php


$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';
$gender = '';
$files='';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}
 $mysqli = mysqli_connect("localhost","root","","foodwheels");
if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if(empty($_POST["gender"]))
 {
  $error .= '<p><label class="text-danger">Please select your post</label></p>';
 }
 
 if(empty($_POST["file"]))
 {
  $error .= '<p><label class="text-danger">Please select a file</label></p>';
 }
	if($error == '')
	{
		 $gender = $_POST['Gender'];
		 $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
		 $tname = $_FILES["file"]["tmp_name"];
		 $uploads_dir = 'Files';
		 move_uploaded_file($tname, $uploads_dir.'/'.$pname);
		 $sql = "INSERT INTO contact (name, email,subject, message, post,file) VALUES ('$name','$email','$subject','$message','$gender','$pname')";
		 $error = '<label class="text-success">Thank you for contacting us</label>';
		 $name = '';
		 $email = '';
		 $subject = '';
		 $message = '';
		 $gender = '';
		 $_FILES='';
		 mysqli_query($mysqli,$sql);
	 }
      
		 
}



?>
<!DOCTYPE html>
<html>
 <head>
  <title>Contact Form</title>
  <link rel="icon" href="images/logo1.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h1 align="center">Contact form to join our Team</h1>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
   <form action=""method="POST" enctype="multipart/form-data">
     <h3 align="center">Contact Form</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
     </div>
	<div class="form-group">
				   
				   <label for="gender">POST</label>
		    	
			        <input type="radio" name="Gender" value="chef" >CHEF   
					<input type="radio" name="Gender" value="Pizza Supplier" >Pizza Supplier  
					
					</div>
     <div class="form-group">
      <label>Enter Message</label>
      <input type="text" name="subject" class="form-control" placeholder="Enter Message" value="<?php echo $subject; ?>" />
     </div>
     <div class="form-group">
      <label>Short Note About You</label>
      <textarea name="message" class="form-control" placeholder="Write Your CV"><?php echo $message; ?></textarea>
     </div>
	  <div class="form-group">
      <label>Upload Your CV</label>
       <input type="file" name="file" id ="fileToUpload">
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
	  <button type="button" class="login-btn" style="background-color:white;"><a href="index.php" style="">Go back to Home</a></button>	
     </div>
	  
	</form>
	
   </div>
  </div>
  
 </body>
</html>