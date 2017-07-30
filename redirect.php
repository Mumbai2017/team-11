<?php
  session_start();
  include("connection.php");
  //$cust = $_SESSION["customer_name"];
  $cust = "User 1";
  //$order_id = $_POST["order_id"];
  $order_id = "1";
  $qry="INSERT INTO tracking(track_no,customer_id,order_id) VALUES (1,1,1)";
  $result=mysqli_query($conn,$qry);
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
  //TODO: send sms to sakhi
$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => 'xxxxxxxxxx',
    'To'    => '9820136330',
    'Body'  => 'Hi Aditya, your number 9123456780 is now turned https://adityamaniar240196.000webhostapp.com/myorders.php.',
);
 
$exotel_sid = "codeforgood7"; // Your Exotel SID
$exotel_token = "6d45b2cbec38dc28a3bb0c4c5ed2a646632f28e4"; // Your exotel token
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
//print "Response = ".print_r($http_result);
  header("Location: processing.php");
  //$array = array('order_id' => $order_id, 'sakhi_names' => $new_array);
  /*foreach($_SESSION['sakhis'] as $item) {
    if($item!=null)
      echo $item;
  }*/
?>