<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FOOD WHEELS</title>
		<link rel="icon" href="images/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		

		
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <?php
	  		if(isset($_SESSION)) 
    { 
        session_destroy(); 
    }
		 if(isset ($_SESSION['email']) ){
                header ("Location:home.php");
                exit; // stop further executing, very important
            }
	  ?>
	</head>
	<body>

		<section style="background-color: black;margin-block: -21px;padding-top: 44px;">
			<h1 style="text-align: center;color: crimson;font-style: oblique;font-family: initial;font-size: 65px;"> FOOD WHEELS</h1>
		</section>
		
		
		</section>
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
	  
		<!--Header Section Start-->
		<section style="background-color: black;">
			<div class="container">
			
				<!--Header Left-->
			 	<div class="row">
				
			 		<div class="col-md-6">
			 			
			 		</div>

			 		<!--Header right-->

			 		<div class="col-md-6 contact-info">
			 			<div>
						
			 				<ul class="list-inline">
			 					<li class="contact-number">+880167-3577514</li>
			 					<button type="button" class="login-btn" style="background-color: crimson;"><a href="login.php" style="">Login</a></button>
			 				</ul>
			 			</div>

			 			<div class="social-info">
			 				<ul class="list-inline">
			 					<li><i class="fa fa-facebook"> </i></li>
			 					<li><i class="fa fa-twitter"> </i></li>
			 					<li><i class="fa fa-linkedin"></i></li>
			 				</ul>
			 			</div>
			 		</div>
			 	</div>	
		</div>
		</section>
		<!--Header Section End-->
		<!--Banner Section start-->
		<section class="banner-img">
			<div class="container">

				<div class="row">
					<div class="col-md-4 col-md-offset-8 ">
						<div class="outter-border">
							<div class="inner-content">
								<h1> Thanks to FOOD WHEELS</h1>
								<h2> FOOD WHEELS Sold 150  <br> MORE pizzas to</h2> 
								<h3>Customers Last Week!</h3> 
								<button type="button" class="findout-btn">Find Out How!</button>
							</div>
						</div>
					</div>	
				</div>
				
			</div>
		</section>
		<!--Banner Section end-->
		<!--Loyalty Reward Start-->
		<section class="loyalty-reward">
			<div class=" container">
				<div class="row">
					<h1>Welcome <br><span class="thin"> Choose between various meals and platters </span></h1>
					<div class="col-md-4">
						<img src="images/pizza_pastries.png" class="img-responsive center">
						<h2> Puff Pastry Pizza</h2>
						<p>Thaw the puffed pastry on the counter for 45 minutes or in the fridge for several hours. When thawed, carefully open the sheet, then slice it in half down the middle. Place both halves on a baking sheet lined with parchment or a baking mat. Preheat oven to 415 degrees, then start on the pizza toppings.</p>
					</div>
					<div class="col-md-4">
						<img src="images/p10.png" class="img-responsive center">
						<h2>Cream Pastry</h2>
						<p>Pastry cream, or crème patissière, is a staple that every baker should know how to make. Pastry cream is a thick custard that can be used as a filling for any number of cakes, tarts or pastries. It is made with milk, eggs, sugar, cornstarch (or a mixture of flour and cornstarch) and flavoring.</p>
					</div>
					<div class="col-md-4">
						<img src="images/piza_bassil.png" class="img-responsive center">
						<h2>Pizza Basssil</h2>
						<p>basil leaves on top, drizzle with a little more olive oil and sprinkle garlic all over. Bake the pizzas until the crusts are crisp and brown on the bottom and the cheese is melted on top, about 15 minutes. Drizzle 1 teaspoon of oil over each pizza.</p>
						
					</div>					
				</div>	
			</div>
		</section>
		<!--Loyalty Reward End-->
		<!--Sale Enrollment Section Start-->
		<section class="sale-enrollment">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
					<h2>10 years of Experience <span class="thin">makes us the best</span></h2>
					<p>Everybody appreciates innovative ideas even on food according to their taste. Food quality seems to be accepted as a fundamental component to satisfy restaurant customers ,thats why in FOOD WHEELS's pizza you will get food with high quality and our team has been divided into groups in order to pay attention to the key food quality attributes that elicit customer satisfaction..</p>
					</div>	
				
				</div>
				<div class="col-md-12"> 
					
				</div>
				
			</div>
		</section>
		<!--Sale Enrollment Section End-->

		<!--Digital Rewards-->
		<section class="digital-rewards">
			<div class="container">
				<div class="row">
					<h1><span class="thin">Our </span> Special</h1>
					<div class="col-md-12">
						<img src="images/p4.png" class="img-responsive">
					</div>
					<div class="col-md-12">
						<h1 class="text-center" ><span class="thin"> Stay </span>Connected</h1>
						<p class="text-center thin">When it comes to food, we all know how much every one of us love to eat. The desire to eat just rises to a next level when the food is pizza.<br> When it comes to pizza, who doesn’t like it? We may have different taste or we may have different favourites,<br> but it’s impossible not to love a food like Pizza.<br>
						So, hands down, pizza is without any doubt one of the best food mankind has been blessed with..</p>
						
					</div>
					
				</div>
			</div>
		</section>


		<!-- slider --!>
		
		<!-- Start Bootstrap Carousel BODY section -->
  <section class="slider">

  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/p9.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/p22.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/p21.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
<!-- End Bootstrap Carousel BODY section -->





		<!--Slow day Section Start-->
		<section class="slow-day">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1">
						<h1 class="text-center">Slow Day?</h1>
						<p>By taking <span class="clr-text">coffe from FOOD WHEELS</span>  is your go-to neighborhood joint, any time, any day.<br> All it takes is a couple of minutes to send a personalized message to an SMS text list, and just like clockwork you'll connect to your entire customer base with<span class="clr-text"> special incentives.</span> With <span class="clr-text"> increased loyalty</span> through incentive, your business is going to get a whole l</p>
					</div>
					<div class="col-md-6">
					<img src="images/c1.jpg">
					</div>
				</div>
			</div>
		</section>
		<!--Slow day Section End-->

		<!--DashBroad Section Start-->
		<section class="dashbroad" >
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="images/pasta1.png" class="img-responsive">
					</div>
					<div class="col-md-6">
					  <h1 class="text-center">Try One of Our Value Combo Meals <span class="thin text-center"> You will never disapointed </span></h1>
			<ul>
					
<p class="text-pasta" >Chicken Picatta
$9.49
Boneless chicken breast sautéed in a lemon white wine butter sauce with capers, served with fettuccine alfredo. Salad or veggies may be substituted for pasta.
Cajun Chicken Penne
Cajun Chicken Penne
$9.49
Blackened chicken breast diced and sautéed with bell peppers and red onions,  tossed together with a spicy cajun cream sauce and penne pasta. Salad or veggies may be substituted for pasta.
Shrimp Picatta
Shrimp Picatta
$9.99
Eight tiger shrimp sautéed in a lemon white wine butter sauce with capers, served with fettuccine alfredo. Salad or veggies may be substituted for pasta.</p>
			
					</ul>
					<p class="report-text text-center">Analyze reports, ROI and much more with your  SpringBig  merchant dashboard.</p>
						
					</div>
				</div>
			</div>
		</section>
		<!--DashBroad Section Start-->
		<section class="footer">
			<div class= "container">
				<div class="row">
					<p>©2019 FOOD WHEELS. All Rights Reserved.</p>
					
				</div>
				
			</div>
		</section>


	</body>
</html>