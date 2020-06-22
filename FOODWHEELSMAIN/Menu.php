<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "foodwheels");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="Menu.php"</script>';
			}
		}
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "checkout")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			//if($values["item_id"] == $_GET["id"])
			//{
				$itemid=$_GET["id"];
				$temname=$values["item_name"];
				$temquantity=$values["item_quantity"];
				$temprice=$values["item_price"];
				
				$query="INSERT INTO purchase (productname,quantity,price) VALUES('$temname','$temquantity','$temprice')";
				mysqli_query($connect,$query);
				
				//$sql = mysqli_query($success, "INSERT INTO purchase (productname,quantity,price) VALUES('$temname','$temquantity','$temprice')");
				//$row = mysqli_num_rows($sql);
				
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item added")</script>';
				echo '<script>window.location="Menu.php"</script>';
			//}
		}
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "checkout")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			//if($values["item_id"] == $_GET["id"])
			//{
				$itemid=$_GET["id"];
				$temname=$values["item_name"];
				$temquantity=$values["item_quantity"];
				$temprice=$values["item_price"];
				
				$query="INSERT INTO purchase (productname,quantity,price) VALUES('$temname','$temquantity','$temprice')";
				mysqli_query($connect,$query);
				
				//$sql = mysqli_query($success, "INSERT INTO purchase (productname,quantity,price) VALUES('$temname','$temquantity','$temprice')");
				//$row = mysqli_num_rows($sql);
				
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item added")</script>';
				echo '<script>window.location="Menu.php"</script>';
			//}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Menu</title>
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
                header ("Location: Menu1.php");
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

<div class="container">
			<br />
			<br />
			<br />
			<br />
			<br /><br />
			</br></br>
			</br></br>
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="Menu.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">Taka <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Taka <?php echo $values["item_price"]; ?></td>
						<td>Taka <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="Menu.php?action=checkout&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">checkout</span></a></td>
						<td><a href="Menu.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Taka <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					
					<?php
					}
					?>
						
				</table>
			
			</div>
		</div>
	</div>
	<br />
	</body>
	  
  

</body>
</html>