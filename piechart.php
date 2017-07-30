<html>
<head>
<title>Highcharts Tutorial number of sakhis versus area</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>  
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

<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">    

$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'Browser market shares at a specific website, 2014'   
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
</body>
</html>