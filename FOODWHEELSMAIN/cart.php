
   <?php 
echo '<script>alert("Item Added to the cart")</script>';
$selectedquantity = "";
$id = "";
$name="";
$image="";
$price="";
$db1 = mysqli_connect('localhost', 'root', '', 'foodwheels');

if (isset($_POST['shopping_cart'])) {
	$selectedquantity = mysqli_real_escape_string($db1, $_POST['quantityofitem']);
	$name = mysqli_real_escape_string($db1, $_POST['nameForCart']);
	
	if (empty($quantityofitem)) { array_push($errors, "Number is required"); }

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT image,price FROM tbl_product WHERE name='$name'  ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$image=$row['image'];
$price=$row['price'];

$query = "INSERT INTO insertpurchase (image, name, quantity, price) 
  			  VALUES('$image', '$name', '$selectedquantity' ,'$price' )";
  	mysqli_query($db, $query);

}

	session_start(); 

	$_SESSION["shopping_cart"] = ''; 
	
	unset($_SESSION["shopping_cart"]);
   
	//session_destroy();
	
	header('location:Menu.php'); 
	?>
	