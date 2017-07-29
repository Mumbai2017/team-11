<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php include'connection.php'
session_start();
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
<div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="container">
  <h2>Order List</h2>
    <br>
<br>
<br>	
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
		<th>Urgent</th>
        <th>Pick-Up</th>
		</tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

<button type="button">					<a href="#" class="button special">Confirm Order</a>
</button>

  </div>
</div>




</body>
</html>