<?php
    include("connection.php");
    include("template/sakhi_display.php");
    //session_start();
    //$sakhilocation="select location from sakhi where $%#$=sakhiid";
    
?>
<html>
    <head>
        <title></title>
    <style>
        table, th, td {
    border: 1px solid black;
}
        </style>
    </head>
    <body>
       <div id="EntireCatalog" style="display:blocked">
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
}*/echo "<table><tr><th>Name</th><th>Breakfast</th><th>Methi Masala</th><th>Dahi Bajri Methi</th><th>Nachni</th><th>Jeera</th><th>Peppery Oats</th><th>Khichdi</th><th>Punjabi Masala</th><th>Low Calorie</th></tr>";
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
            </div>
        
        
    </body>
</html>