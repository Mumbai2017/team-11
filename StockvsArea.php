<html>
<head>
<title>Highcharts Tutorial</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>  
</head>
<body>
    <img src="sanisaheader.jpg" style="width:100%";>
<?php
   include("connection.php");
$location=$conn->query("SELECT sakhiloc FROM itemsdetails GROUP BY sakhiloc;");
$rows = array();
while($r = mysqli_fetch_assoc($location)) {
$rows[] = $r;
}
#breakfast khakda
$quant_break=$conn->query("SELECT SUM(quantity1) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_break = array();
while($r = mysqli_fetch_assoc($quant_break)) {
$rows_break[] = $r;
}

#Dahi Bajri
$quant_dahi=$conn->query("SELECT SUM(quantity2) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_dahi = array();
while($r = mysqli_fetch_assoc($quant_dahi)) {
$rows_dahi[] = $r;
}

#Jeera
$quant_jeera=$conn->query("SELECT SUM(quantity3) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_jeera = array();
while($r = mysqli_fetch_assoc($quant_jeera)) {
$rows_jeera[] = $r;
}

#Khichdi
$quant_khichdi=$conn->query("SELECT SUM(quantity4) as data from itemsdetails GROUP BY sakhiloc;");
$rows_khichdi = array();
while($r = mysqli_fetch_assoc($quant_khichdi)) {
$rows_jeera[] = $r;
}

#Low Calori
$quant_lowcal=$conn->query("SELECT SUM(quantity5) as data from itemsdetails GROUP BY sakhiloc;");
$rows_calorie = array();
while($r = mysqli_fetch_assoc($quant_lowcal)) {
$rows_calorie [] = $r;
}


#Methi masala
$quant_masala=$conn->query("SELECT SUM(quantity6) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_masala = array();
while($r = mysqli_fetch_assoc($quant_masala)) {
$rows_masala [] = $r;
}

#machini
$quant_nachini=$conn->query("SELECT SUM(quantity7) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_machini = array();
while($r = mysqli_fetch_assoc($quant_nachini)) {
$rows_machini [] = $r;
}



#Peppery oats
$quant_oats=$conn->query("SELECT SUM(quantity8) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_oats = array();
while($r = mysqli_fetch_assoc($quant_oats)) {
$rows_oats [] = $r;
}

#Punkabi masala
$quant_masala=$conn->query("SELECT SUM(quantity9) as data FROM itemsdetails GROUP BY sakhiloc;");
$rows_masla = array();
while($r = mysqli_fetch_assoc($quant_masala)) {
$rows_masla [] = $r;
}


?>

<div id="container" style="width: 1450px; height: 600px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
      type: 'bar'
   };
   var title = {
      text: 'Stock versus Area wrt Sakhi'   
   };
   var subtitle = {
      text: 'Stock versus location'  
   };
  var s = <?php echo json_encode($rows,JSON_NUMERIC_CHECK); ?>;
    var keys = [];
   for(var k in s){
    keys.push(s[k]);
 }
 console.log(keys);
 console.log(keys[0]["sakhiloc"]);
 console.log(keys[1]["sakhiloc"]);
 console.log(keys[2]["sakhiloc"]);
 var locationarray = [];
 var locarray= [];
 locationarray.push(keys[0]["sakhiloc"]);
 locationarray.push(keys[1]["sakhiloc"]);
 locationarray.push(keys[2]["sakhiloc"]);
console.log(locationarray);


 /*for(var i=0;i<keys.length;i++)
 {
   var x=locarray.push(keys[i]["sakhiloc"]);
   console.log(x);
 }
 locarray.push(keys[0]["sakhiloc"]);
 locarray.push(keys[1]["sakhiloc"]);
 locarray.push(keys[2]["sakhiloc"]);

 console.log(locarray);*/
 console.log(s.length);

   var xAxis = {
      categories: locationarray,
      max : locationarray.length-1,
      title: {
         text: null
      }
   };
   var yAxis = {
      min: 0,
      title: {
         text: 'Stock(killograms)',
         align: 'high'
      },
      labels: {
         overflow: 'justify'
      }
   };
   var tooltip = {
      valueSuffix: ' killograms'
   };
   var plotOptions = {
      bar: {
         dataLabels: {
            enabled: true
         }
      }
   };
   var legend = {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'top',
      x: -40,
      y: 100,
      floating: true,
      borderWidth: 1,
      backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
      shadow: true
   };
   var credits = {
      enabled: false
   };
   /*FETCHING THE BREAKFAST DATA*/
   var breakHAKDA = <?php echo json_encode($rows_break,JSON_NUMERIC_CHECK); ?>;
    var breakfast = [];
   for(var k in breakHAKDA){
    breakfast.push(breakHAKDA[k]);
     }
    console.log(breakfast);
    var locbreak = [];
 for(var i=0;i<breakfast.length;i++)
 {
   locarray.push(breakfast[i]["data"]);
 }
/*FETCHING THE bajro DATA*/
   var bajrimethi = <?php echo json_encode($rows_dahi,JSON_NUMERIC_CHECK); ?>;
    var breakbajri = [];
   for(var k in bajrimethi){
    breakbajri.push(bajrimethi[k]);
     }
    
    var locbajri = [];
 for(var i=0;i<breakbajri.length;i++)
 {
   locbajri.push(breakbajri[i]["data"]);
 }
 /*FETCHING THE jeera DATA*/
   var breakJEERA = <?php echo json_encode($rows_jeera,JSON_NUMERIC_CHECK); ?>;
    var JEERA = [];
   for(var k in breakJEERA){
    JEERA.push(breakJEERA[k]);
     }
   
    var locJEERA = [];
 for(var i=0;i<JEERA.length;i++)
 {
   locJEERA.push(JEERA[i]["data"]);
 }
 /*FETCHING THE KHICHDI DATA*/
   var breaKHICHDI = <?php echo json_encode($rows_khichdi,JSON_NUMERIC_CHECK); ?>;
    var KHICHDI = [];
   for(var k in breaKHICHDI){
    KHICHDI.push(breaKHICHDI[k]);
     }
    
    var locKHICHDI = [];
 for(var i=0;i<KHICHDI.length;i++)
 {
   locKHICHDI.push(KHICHDI[i]["data"]);
 }
 /*FETCHING THE LOWCAL DATA*/
   var breaklowcal = <?php echo json_encode($rows_calorie,JSON_NUMERIC_CHECK); ?>;
    var LOWCAL = [];
   for(var k in breaklowcal){
    LOWCAL.push(breaklowcal[k]);
     }
    
    var locLOWCAL = [];
 for(var i=0;i<LOWCAL.length;i++)
 {
   locLOWCAL.push(LOWCAL[i]["data"]);
 }
 /*FETCHING THE METHIMASLAAA DATA*/
   var breakMETHI = <?php echo json_encode($rows_masala,JSON_NUMERIC_CHECK); ?>;
    var METHI = [];
   for(var k in breakMETHI){
    METHI.push(breakMETHI[k]);
     }
    
    var locMETHI = [];
 for(var i=0;i<METHI.length;i++)
 {
   locMETHI.push(METHI[i]["data"]);
 }
 /*FETCHING THE NAICHNAI DATA*/
   var breakNACHNI = <?php echo json_encode($rows_machini,JSON_NUMERIC_CHECK); ?>;
    var NACHINI = [];
   for(var k in breakNACHNI){
    NACHINI.push(breakNACHNI[k]);
     }
    
    var locNAICHINI = [];
 for(var i=0;i<NACHINI.length;i++)
 {
   locNAICHINI.push(NACHINI[i]["data"]);
 }
 /*FETCHING THE OATS DATA*/
   var breakOATS = <?php echo json_encode($rows_oats,JSON_NUMERIC_CHECK); ?>;
    var OATS = [];
   for(var k in breakOATS){
    OATS.push(breakOATS[k]);
     }
    
    var locOATS = [];
 for(var i=0;i<OATS.length;i++)
 {
   locOATS.push(OATS[i]["data"]);
 }

 /*FETCHING THE MASALA DATA*/
   var breakMASLA = <?php echo json_encode($rows_masala,JSON_NUMERIC_CHECK); ?>;
    var MASALA = [];
   for(var k in breakMASLA){
    MASALA.push(breakMASLA[k]);
     }
    
    var locMASALA = [];
 for(var i=0;i<MASALA.length;i++)
 {
   locMASALA.push(MASALA[i]["data"]);
 }


   var series= [{
         name: 'Breakfast',
            data: locarray
        }, 
        {
            name: 'Dahi Bajri Methi',
            data: locMETHI
        }, 
        {
            name: 'Jeera',
            data: locJEERA   
       },
       {
       name: 'Khichdi',
            data: locKHICHDI 
       },
       {
       name: 'Low Calorie',
            data: locLOWCAL   
       },
       {
       name: 'Nachni',
            data: locNAICHINI    
       },
       {
       name: 'Peppery Oats',
            data:locOATS      
       },
       {
       name: 'Punjabi Masala',
           data:locMASALA     
       }

   ];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;   
   json.subtitle = subtitle; 
   json.tooltip = tooltip;
   json.xAxis = xAxis;
   json.yAxis = yAxis;  
   json.series = series;
   json.plotOptions = plotOptions;
   json.legend = legend;
   json.credits = credits;
   $('#container').highcharts(json);
  
});
</script>
    <form action="new_dashboard/dashboard.php.html">
    <input type="submit" name="res" value="Back" style="margin:auto;display:block;"></form>
</body>
</html>