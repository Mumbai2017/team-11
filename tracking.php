<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
 
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
	
	include("connection.php");
	//if(isset($_SESSION["customer"])) {
		//$username = $_SESSION["customer"];
		$username = "User 1";
		//$order_id = $_POST["id"];
		//echo $order_id;
		$order_id = 6;
		$sql = "SELECT track_no FROM tracking WHERE customer_id = 1 AND order_id='$order_id'";
		$result = mysqli_query($conn,$sql);
  		$row = mysqli_fetch_assoc($result);
  		echo $row["track_no"];
  		if($row["track_no"]==1) {
  			echo '<img src="images/step11.jpg"/>';
  		}
  		else if($row==2) {
echo '<img src="images/step2.jpg"/>';
  		}
  		else {
echo '<img src="images/step3.jpg"/>';
  		}
	//}
	/*if(isset($_SESSION["sakhi"])) {
		$sakhi = $_SESSION["sakhi"];
		$sql = "SELECT track_no FROM tracking WHERE sakhi_id = (SELECT id FROM sakhi WHERE name = '$sakhi')";
		$result = mysqli_query($conn,$sql);
  		$row = mysqli_fetch_assoc($result);
  		if($row==1) {
echo '<img src="step11.jpg"/>';
  		}
  		else if($row==2) {
echo '<img src="step2.jpg"/>';
  		}
  		else {
echo '<img src="step3.jpg"/>';
  		}
	//}*/
?>

</body>
</html>