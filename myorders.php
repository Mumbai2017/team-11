<?php
	include("connection.php");
	$sakhi_name = $_SESSION["sakhi_name"]; // or session
	$sql = "SELECT sakhi_id from orders WHERE sakhi_id = (SELECT id from sakhi WHERE sakhi_name = '$sakhi_name')";
	
?>