<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Join</title>
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
                header ("Location:join1.php");
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

	<section class="join">
			<div class="container-fluid">
				<div class="row">
					<br>
					<br>
					<br>
					<h3 class="text-c"></br></br></br>If you are interested to join our team as a Chef,<br>please read the requirements and the advantages which are given below. </h3>
					<br>
					<br>
					<br>
					<br>

					<div class="col-md-2 ">
						<div class="chef">
							<div class="chef-t">
								<h1 class="text-j"><span class="r-heading1">Chef</span> </h1>
								<h3 class="text-j"><span class="r-heading1">Dhaka,Bangladesh</span> </h3>
								
								
								
							</div>
							
						</div>
					</div>

					<div class="col-md-2 ">
						<div class="need">
							<div class="need-t">
								<ul class="n-text">
								<p>
								<h2><strong>Needs:</strong></h2>
								<li>Passion for the Culinary Arts.</li>
								<li>Always fresh</li>
								<li>Creativity.</li>
								<li>Willingness to Practice.</li>
								<li>Being a Team Player.</li>
								</ul>
								</p>
						
							</div>
						</div>
					</div>

					<div class="col-md-2 ">
						<div class="need">
							<div class="need-t">
								<ul class="n-text">
								<p>
								<h2><strong>Offer:</strong></h2>
								<li>Great job in a reputable company.</li>
								<li>Competitive Salary</li>
								<li>Medical, Vision, and Dental.</li>
								<li>Attractive salary</li>
								<li>Life Insurance</li>
								</ul>
								</p>
							</div>
					</div>
				</div>



				


			
			<div>
				<div class="col-md-2 ">
						<div class="chef">
							<div class="chef-t">
								<h1 class="text-j"><span class="r-heading1">Pizza Supplier</span> </h1>
								<h3 class="text-j"><span class="r-heading1">Dhaka,Bangladesh</span> </h3>
								
								
							</div>
							
						</div>
					</div>
			</div>

					<div class="col-md-2 ">
						<div class="need">
							<div class="need-t">
								<ul class="n-text">
								<p>
								<h2><strong>Needs:</strong></h2>
								<li class="list_star">Ability to Handle Criticism</li>
								<li>creativity and extraordinary approach</li>
								<li>Being a Team Player</li>
								<li>experience in similar position</li>
								<li>Punctuality</li>
								</ul>
								</p>
						
							</div>
						</div>
					</div>

					<div class="col-md-2">
						<div class="need">
							<div class="need-t">
								<ul class="n-text">
								<p>
								<h2><strong>Offer:</strong></h2>
								<li>Great job in a reputable company</li>
								<li>Achievable Bonus Program</li>
								<li>Opportunity for professional development</li>
								<li>Attractive salary</li>
								<li>Paid Vacations</li>
								</ul>
								</p>
							</div>
					</div>
				</div>





			</div>
		</section>
		
	<section class="Abt">
		
		<h1 class="text-j" align="center"><span class="r-heading1" >Contact   US</span> </h1>
		<div class ="Cnct">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					</div>
					
					<div class="col-md-3">
					    <img src="images/shadhin.jpg" class="img-responsive center">
						<div class="col-md-10" style="margin-left: -10px;">
							<h3> Fardin Alam Shadhin</h3>
								<p> Computer Science &amp; Engeering </p>
								<p> 17-01-04-119 </p>
								<p> Phone Number:01768454606 </p>
							
						</div>
					
					</div>
					
					<div class="col-md-3">
						<img src="images/sami.jpg" class="img-responsive center">
						<div class="col-md-10" style="margin-left: 30px;">
							<h3> Mehedi Hasan Sami</h3>
								<p> Computer Science &amp; Engeering </p>
								<p> 17-01-04-118 </p>
								<p> Phone Number:01531984613 </p>
								
							
						</div>
							
					</div>
					<div class="col-md-3">
					
						<button type="button" class="login-btn" style="background-color:black;"><a href="contact.php" style="">To Join Press Here</a></button>	
		
			</div>	
				
		</div>
	</section>

		<br>
		<br>
		<br>
		
		
		
		

	<section class="footer">
			<div class= "container">
				<div class="row">
					<p>©2019 FOOD WHEELS. All Rights Reserved.</p>
					
				</div>
				
			</div>
		</section>
	  
	  
  

</body>
</html>