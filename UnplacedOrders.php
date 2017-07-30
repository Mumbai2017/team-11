<?php
    include("connection.php");
?>
<html>
<head>
    <title>
    </title>
    <meta charset="UTF-8">
		<title>Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	
    </head>
<body>
    <header id="header" style="background-color:black";>
		
				<h1><a href="index.html">Welcome!</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="Signup.html" id="register" class="button special">Register</a></li>
						<li><a href="Login.html" id="login" class="button special">Sign In</a></li>
					</ul>
				</nav>
			</header>
    <p style="font-size: 19px; text-align: center">Unplaced orders</p>
    <?php 
    $qry="select * from orderdetails where status=0;";
    $result=mysqli_query($conn,$qry);
    //$result=mysqli_query($conn,$qry2);
    //echo $result;
    //$row=mysqli_fetch_assoc($result);
    //echo $row["sakhiid"];
    
    /*if ($conn->query($qry) === TRUE) {
	 echo "Successful";
} else {
	echo "Query error"; 
}*/echo "<table><tr><th>Order ID</th><th>Product</th><th>Customer Name</th><th>Urgent</th></tr>";
        if ($result->num_rows > 0) {
							     // output data of each row
							     while($row = $result->fetch_assoc()) {
							     	//echo "<tr>";
                                    // echo "<tr><td>Test</td></tr>";
                                     //$temp=$row["customer_id"];
                                     //$qry2="select name from customer where id='$temp'";
                                     //$sql=mysqli_query($conn,$qry2);
							         echo "<tr><td>" . $row["orderid"] . "</td> <td> ".$row["pname"]."</td><td> User 1</td><td> ".$row["Urgency"]."</td></tr>";
							         //echo "<img src='/php_test/image_archive/" . $last_file[0] . "' alt='error'>";


							     }
							} else {
							     echo "0 results";
							}
    
    ?>
</body>
</html>