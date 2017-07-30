<?php
  session_start();
  include("connection.php");
?>
<!DOCTYPE html>

		
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


 
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

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
		error_reporting(0);		
		$sakhi_name = "diksha";
		$sql = "SELECT * from orderdetails WHERE sakhi_id = (SELECT id from sakhi WHERE name = '$sakhi_name') AND status!=1";
		$result = mysqli_query($conn,$sql);
	    $count = mysqli_num_rows($result);
	    if ($count>0) {
	    	while ($row = mysqli_fetch_assoc($result)) {
	    		$customer = $row["customer_id"];
	    		$sakhi_id = $row["sakhi_id"];
	    		$quantity = $row["pquantity"];
	    		$item_name = $row["pname"];
		    	$cust = "SELECT location FROM customer WHERE id = '$customer'";
		    	$result1 = mysqli_query($conn,$cust);
		    	$cust_row = mysqli_fetch_assoc($result1);
		    	echo 'Product name: '.$row["pname"].' Quantity: '.$row["pquantity"].' Customer location: '.$cust_row["location"];
		    	echo '<form method="post" action="order_confirm.php">
					<input type="submit" name="res" value="accept"/>
					<input type="submit" name="res" value="deny"/>
					<input type="hidden" name="sakhi_id" value="'.$sakhi_id.'"/>
					<input type="hidden" name="quantity" value="'.$quantity.'"/>
					<input type="hidden" name="pname" value="'.$item_name.'"/>
				</form>';
		    }
	    }
	    else {
	    	echo "You currently do not have any pending orders";
	    }
	?>
</body>
</html>