<!DOCTYPE html>
<?php 
	include'../connection.php'
 ?>
 
<html lang="en">
	<head>
		

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="mystyle.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</head>
	<body>
<img src="sanisaheader.jpg" style="width:100%";></img>

<?php
session_start();
	//$customer_name = $_SESSION["customer_name"];
	$customer_name = "User 1";
	$sql = "SELECT * FROM orderdetails WHERE customer_id = (SELECT id FROM customer WHERE name='$customer_name')";
	$result = mysqli_query($conn,$sql);
  	while($row = mysqli_fetch_assoc($result)) {
  		if($row["fulfilled"])
  			$delivered = "Delivered";
  		else
  			$delivered = "In Transit";
  		$order_id = $row["orderid"];
  		echo 'Product Name: '.$row["pname"].' Product Quantity: '.$row["pquantity"].' Order Delivered: '.$delivered.'<br>';
  		echo '<form method="post" action="../tracking.php">
  				<input type="submit" name="submit" value="Track Order" />
  				<input type="hidden" name="id" value="id" />
  				</form>';
  	}
?>


</body>
</html>