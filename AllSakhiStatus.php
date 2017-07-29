<?php
    include("connection.php");
    //session_start();
    //$sakhilocation="select location from sakhi where $%#$=sakhiid";
    
?>
<html>
    <head><title></title></head>
    <body>
        <?php
        $sakhilocation="Goregaon";
    //$qry1="select * from sakhi where location='".$sakhilocation."';";
    $qry2="select * from itemsdetails;";
    //echo $qry;
    $result=mysqli_query($conn,$qry2);
    //echo $result;
    //$row=mysqli_fetch_assoc($result);
    //echo $row["sakhiid"];
    
    /*if ($conn->query($qry) === TRUE) {
	 echo "Successful";
} else {
	echo "Query error"; 
}*/echo "<table><tr><th>Name</th><th>Item</th><th>Quantity</th></tr>";
        if ($result->num_rows > 0) {
							     // output data of each row
							     while($row = $result->fetch_assoc()) {
							     	//echo "<tr>";
                                    // echo "<tr><td>Test</td></tr>";
							         echo "<tr><td>" . $row["sakhiid"] . "</td> <td>" . $row["iname"] ."</td><td> ".$row["quantity"]." </td></tr>";
							         //echo "<img src='/php_test/image_archive/" . $last_file[0] . "' alt='error'>";


							     }
							} else {
							     echo "0 results";
							}

        ?>
    </body>
</html>