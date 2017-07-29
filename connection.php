<?php
	$mysql_hostname = "adityamaniar240196.000webhostapp.com";
	$mysql_user = "id2394212_team11";
	$mysql_password = "123456";
	$mysql_database = "id2394212_codeforgood";
	$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	else 
		echo "done";
?>