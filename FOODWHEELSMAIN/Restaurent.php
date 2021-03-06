<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Restaurent</title>
		<link rel="icon" href="images/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
			  <?php
			if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
     if(!isset ($_SESSION['email']) ){
                header ("Location: Restaurent1.php");
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
				 <a class="navbar-brand" href="home.php"><img src = "images/logo1.png" class="logo"></a>	
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="home.php"> Home</a></li>
					<li><a href="Restaurent.php">Restaurent</a></li>
					<li><a href="Menu.php">Menu</a></li>	
					<li><a href="join.php">Join Our Team </a></li>
					<li><a href="location.php">Location</a></li>
						 
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	 </section >
	 <br></br>

	 <section class="dashbroad" >
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="images/C.png" class="img-responsive">
					</div>
					<div class="col-md-6">
					<h1 class="text-c">Welcome to <span class="r-heading">FOOD </span><span class="r-heading1">WHEELS</span> </h1>
					   <div class="text">
					<p>
					<br></br>

<ul><span class="r-heading">W </span>elcome to FOOD WHEELS. We have created this site for your convenience. Please excuse the current bare layout of the site as we had only just had it uploaded. We will improve the site from time to time and include many posts and articles related to pizza which you may find interesting. In the meantime, please feel free to toggle between our pages at the top of this page, which includes our dine in and take away menus as well as our business hours. You can also learn more about our restaurant .The page includes our phone number and our address as well as our email address. We will try our best to reply your emails as soon as we can. Thank you for visiting us online and we hope to see you in our cafe / restaurant soon! Come and Enjoy Eating Meat Free – Vegetarian doesn’t need to be boring!
</ul>
<br></br>

<ul class="r-text"><li>We serve the best food in town.</li>
<li>Always fresh</li>
<li>Fast and nice service.</li>
<li>Satisfaction or money refund guaranteed.</li>
</ul>
</p>
					
                       </div>
						
					</div>
				</div>
			</div>
		</section>

	<section class="footer">
			<div class= "container">
				<div class="row">
					<p>©2019 FOOD WHEELS. All Rights Reserved.</p>
					
				</div>
				
			</div>
		</section>



</body>
</html>