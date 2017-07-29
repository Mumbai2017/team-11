<?php
  
  include("connection.php");
  include("myorders.php");
  $res = $_POST["res"];
  $sakhi_id = $_POST["sakhi_id"];
  if($res=="accept") {
  	echo $sakhi_id;
  	$sql = "UPDATE orderdetails SET status = 1 WHERE sakhi_id = '$sakhi_id'";
  	$result = mysqli_query($conn,$sql);
  	$sql = "SELECT * FROM orderdetails WHERE sakhi_id = '$sakhi_id'";
  	$result = mysqli_query($conn,$sql);
  	$row = mysqli_fetch_assoc($result);
  	$quantity = $_POST["quantity"];
  	$item_name = $_POST["pname"];
  	#$sql = "UPDATE itemsdetails SET quantity=quantity-'$quantity' WHERE iname = '$item_name'";
  	#$result = mysqli_query($conn,$sql);
  	header("Location: myorders.php");
  }
  else {
  	$sql = "UPDATE orderdetails SET sakhi_id = 0 WHERE sakhi_id = '$sakhi_id'";
  	$result = mysqli_query($conn,$sql);
  	header("Location: myorders.php");
  }
?>