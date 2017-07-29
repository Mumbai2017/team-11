<?php
    session_start();
    include("connection.php");
    //session_start();
    //$sakhilocation="select location from sakhi where $%#$=sakhiid";
    error_reporting(0);
?>
<html>
    <head>
        <style>
        table, th, td {
    border: 1px solid black;
}
            
        </style>
        
    </head>
    <body>
        <table><tr><th>Name:</th><th>Quantity:</th><th>Urgent:</th><th>Pickup:</th></tr>
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
            
            $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name1']."','".$quantity1."','".$result."','".$ck."',".$ck1.",".$fulfilled.")";
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
        }
            
        
        
            ?>
        </table>
        <?php
        function insert(){
            echo "Test";
           $qry1="insert into orderdetails(pname,pquantity,customer_id,Urgency,Pickup,fulfilled)values('".$_POST['name1']."','".$quantity1."','".$result."','".$ck."',".$ck1.",".$fulfilled.")";
            $result=mysqli_query($conn,$qry1); 
        }
        echo "<input type='button' class='button special' value='Confirm order' onclick='insert()'>";
        
        ?>
          
        
    </body>
</html>