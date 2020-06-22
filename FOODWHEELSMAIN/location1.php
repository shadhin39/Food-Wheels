<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Location</title>
		<link rel="icon" href="images/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	
	  <?php
	  		if(isset($_SESSION)) 
    { 
        session_destroy(); 
    }
		 if(isset ($_SESSION['email']) ){
                header ("Location:location.php");
                exit; // stop further executing, very important
            }
	  ?>
	</head>
<body>
	<section class="header">
		  <nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				   <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="logo" style="margin-top: 1px;"></a>	
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"> Home</a></li>
					<li><a href="Restaurent1.php">Restaurent</a></li>
					<li><a href="Menu1.php">Menu</a></li>	
					<li><a href="join1.php">Join Our Team </a></li>
					<li><a href="location1.php">Location</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	 </section >
	  
  
   <div class="new">
				<!--Header Left-->
			 	<div class="row">
			 		<div class="col-md-12">
			 			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.177378322622!2d90.4074373!3d23.7636229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0c431067133c05a!2sAUST+Cafeteria!5e0!3m2!1sen!2sbd!4v1516626710255" width="1340" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

			 			
			 		</div>
			 	</div>	

	
  </div>
</body>
</html>