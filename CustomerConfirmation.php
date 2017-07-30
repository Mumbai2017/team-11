<?php
    session_start();
    include("connection.php");
    //session_start();
    //$sakhilocation="select location from sakhi where $%#$=sakhiid";
    error_reporting(0);
?>
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
	    <style>
        table, th, td {
    border: 1px solid black;
}
            
        </style>
        	
	</head>
	<body>
<img src="sanisaheader.jpg" style="width:100%";>
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
       <?php
        $quantity1= $_POST['firstname1'];
        $quantity2= $_POST['firstname2'];
        $quantity3= $_POST['firstname3'];
        $quantity4= $_POST['firstname4'];
        $quantity5= $_POST['firstname5'];
        $quantity6= $_POST['firstname6'];
        $quantity7= $_POST['firstname7'];
        $quantity8= $_POST['firstname8'];
        $quantity9= $_POST['firstname9'];
        //$custid=$_SESSION["customer_name"];
        //$sql="select id from customer where name='$cust'";
        //$result=mysqli_query($conn,$sql);
        $result=1;
        $fulfilled=0;
        $qry1="";
        if($quantity1!=0){
            $ck = $_POST['interest16'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest17'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name1']."</td><td>".$quantity1."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name1']."','".$quantity1."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            //echo $qry1;
           $result=mysqli_query($conn,$qry1);
        }
        if($quantity2!=0){
            $ck = $_POST['interest'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest1'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name2']."</td><td>".$quantity2."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name2']."','".$quantity2."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
           // echo $qry1;
        }
        if($quantity3!=0){
            $ck = $_POST['interest2'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest3'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name3']."</td><td>".$quantity3."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name3']."','".$quantity3."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        if($quantity4!=0){
            $ck = $_POST['interest4'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest5'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name4']."</td><td>".$quantity4."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name4']."','".$quantity4."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        if($quantity5!=0){
            $ck = $_POST['interest6'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest7'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name5']."</td><td>".$quantity5."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name5']."','".$quantity5."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        if($quantity6!=0){
            $ck = $_POST['interest8'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest9'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name6']."</td><td>".$quantity6."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name6']."','".$quantity6."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        if($quantity7!=0){
            $ck = $_POST['interest10'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest11'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name7']."</td><td>".$quantity7."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name7']."','".$quantity7."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        if($quantity8!=0){
            $ck = $_POST['interest12'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest13'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name8']."</td><td>".$quantity8."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name8']."','".$quantity8."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        if($quantity9!=0){
            $ck = $_POST['interest14'];
            if ($ck != 'Yes') {
                $ck = 'No';
            }
            $ck1 = $_POST['interest15'];
            if ($ck1 != 'Yes') {
                $ck1 = 'No';
            }
            echo "<tr><td>".$_POST['name9']."</td><td>".$quantity9."</td><td>".$ck."</td><td>".$ck1."</td></tr>";
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name9']."','".$quantity9."','".$result."','".$ck."','".$ck1."',".$fulfilled.")";
            $result=mysqli_query($conn,$qry1);
        }
        //$custid=$_SESSION["customer_name"];
    //$sql="select id from customer where name='$cust'";
    //$result=mysqli_query($conn,$sql);    
        
        ?>
    </tbody>
  </table>

    <button type="button" class="button special" onclick="window.location.href='redirect.php'">Confirm Order</button>


  </div>
</div>

</body>
</html>