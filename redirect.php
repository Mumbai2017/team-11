<?php
  session_start();
  include("connection.php");
  //$cust = $_SESSION["customer_name"];
  $cust = "diksha";
  //$order_id = $_POST["order_id"];
  $order_id = "1";
  $sql = "SELECT location FROM customer WHERE name = '$cust'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  $loc = $row["location"];
  $sql = "SELECT * FROM sakhi WHERE location = '$loc' AND available = 1";
  $result = mysqli_query($conn,$sql);
  $array[] = array();
  $new_array[] = array();
  while($row = mysqli_fetch_assoc($result)) {
    $new_array[$row['id']] = $row['name'];
  }
  $_SESSION['sakhis'] = $new_array;
  TODO: send sms to sakhi
  //$array = array('order_id' => $order_id, 'sakhi_names' => $new_array);
  /*foreach($_SESSION['sakhis'] as $item) {
    if($item!=null)
      echo $item;
  }*/
?>