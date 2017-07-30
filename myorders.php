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
<img src="sanisaheader.jpg" style="width:100%";>
<button><a href="template/orderNgo.html">Buy Items</a></button>
<button><a href="sakhi_display.php">My Peers</a></button>
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
		    	echo '<p style="font-size:23px; padding-top:20px; text-align: center">Product name: '.$row["pname"].'<br> Quantity: '.$row["pquantity"].' <br>Customer Location: '.$cust_row["location"].'</p>';
		    	echo '<form method="post" action="order_confirm.php">
					<input type="submit" name="res" value="accept" style="margin:auto;
  display:block; background: #17232b;
  background-image: -webkit-linear-gradient(top, #17232b, #2980b9);
  background-image: -moz-linear-gradient(top, #17232b, #2980b9);
  background-image: -ms-linear-gradient(top, #17232b, #2980b9);
  background-image: -o-linear-gradient(top, #17232b, #2980b9);
  background-image: linear-gradient(to bottom, #17232b, #2980b9);-webkit-border-radius: 7;
  -moz-border-radius: 7;
  border-radius: 7px;
  font-family: Arial;
  color: #ffffff;
  font-size: 34px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/><br>
					<input type="submit" name="res" value="deny" style="margin:auto;
  display:block; background: #17232b;
  background-image: -webkit-linear-gradient(top, #17232b, #2980b9);
  background-image: -moz-linear-gradient(top, #17232b, #2980b9);
  background-image: -ms-linear-gradient(top, #17232b, #2980b9);
  background-image: -o-linear-gradient(top, #17232b, #2980b9);
  background-image: linear-gradient(to bottom, #17232b, #2980b9);-webkit-border-radius: 7;
  -moz-border-radius: 7;
  border-radius: 7px;
  font-family: Arial;
  color: #ffffff;
  font-size: 34px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
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