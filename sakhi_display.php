<?php include("connection.php");?>
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
<img src="sanisaheader.jpg" style="width:100%";>
<div class="topnav" id="myTopnav">
  <a href="myorders.php">Home</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="container">
  <h2>Sakhis near you</h2>
                                                                                       
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Sakhi Name</th>
        <th>Breakfast Khakra</th>
		<th>Methi Masala Khakra</th>
        <th>Dahi Bajri Methi</th>
		<th>Nachni Khakra</th>
        <th>Jeera Khakra</th>
		<th>Peppery Oats Khakra</th>
		<th>Khichdi Khakra</th>
		<th>Punjabi Khakra</th>
		<th>Low Calorie Khakra</th>
      </tr>
    </thead>
    <tbody>
      
       <?php
       // $sakhilocation="Goregaon";
    //$qry1="select * from sakhi where location='".$sakhilocation."';";
    $qry2="select * from itemsdetails order by sakhiloc;";
    //echo $qry;
    $result=mysqli_query($conn,$qry2);
    //echo $result;
    //$row=mysqli_fetch_assoc($result);
    //echo $row["sakhiid"];
    
    /*if ($conn->query($qry) === TRUE) {
	 echo "Successful";
} else {
	echo "Query error"; 
}*///echo "<table><tr><th>Name</th><th>Breakfast</th><th>Methi Masala</th><th>Dahi Bajri Methi</th><th>Nachni</th><th>Jeera</th><th>Peppery Oats</th><th>Khichdi</th><th>Punjabi Masala</th><th>Low Calorie</th></tr>";
        if ($result->num_rows > 0) {
							     // output data of each row
							     while($row = $result->fetch_assoc()) {
							     	//echo "<tr>";
                                    // echo "<tr><td>Test</td></tr>";
							         echo "<tr><td>" . $row["sakhiid"] . "</td> <td> ".$row["quantity1"]."kg</td><td> ".$row["quantity2"]."kg</td><td> ".$row["quantity3"]."kg</td><td> ".$row["quantity4"]."kg</td><td> ".$row["quantity5"]."kg</td><td> ".$row["quantity6"]."kg</td><td>".$row["quantity7"]."kg</td><td> ".$row["quantity8"]."kg</td><td> ".$row["quantity9"]."kg</td></tr>";
							         //echo "<img src='/php_test/image_archive/" . $last_file[0] . "' alt='error'>";


							     }
							} else {
							     echo "0 results";
							}

        ?>
      
    </tbody>
  </table>
  </div>
</div>





</body>
</html>