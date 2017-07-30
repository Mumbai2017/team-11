<html>
<head>
<title>Highcharts Tutorial number of sakhis versus area</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script> 
    <meta charset="UTF-8">
		<title>Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	
</head>
<body>
<?php
   include("connection.php");

    $sth = $conn->query("SELECT location as name, COUNT(id) as y FROM sakhi GROUP BY location;");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
?>
<img src="sanisaheader.jpg" style="width:100%";>
    
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">    

$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'Location based Analysis'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
 
var complex = <?php echo json_encode($rows,JSON_NUMERIC_CHECK); ?>;
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: complex

   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);  
});
</script>
    <form action="new_dashboard/dashboard.php.html">
    <input type="submit" name="res" value="Back" style="margin:auto;display:block;"></form>
</body>
</html>