<?php
	session_start();
	include("connection.php");
	if(isset($_SESSION["customer"])) {
		$username = $_SESSION["customer"];
		$sql = "SELECT track_no FROM tracking WHERE customer_id = (SELECT id FROM customer WHERE name = '$username')";
		$result = mysqli_query($conn,$sql);
  		$row = mysqli_fetch_assoc($result);
  		if($row==1) {

  		}
  		else if($row==2) {

  		}
  		else {

  		}
	}
	if(isset($_SESSION["sakhi"])) {
		$sakhi = $_SESSION["sakhi"];
		$sql = "SELECT track_no FROM tracking WHERE sakhi_id = (SELECT id FROM sakhi WHERE name = '$sakhi')";
		$result = mysqli_query($conn,$sql);
  		$row = mysqli_fetch_assoc($result);
  		if($row==1) {

  		}
  		else if($row==2) {

  		}
  		else {

  		}
	}
?>