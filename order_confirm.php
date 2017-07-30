<?php
  ob_start();
  include("connection.php");
  include("myorders.php");
  $res = $_POST["res"];
  $sakhi_id = $_POST["sakhi_id"];
  if($res=="accept") {
  	echo $sakhi_id;
  	$sql = "UPDATE orderdetails SET status = 1 WHERE sakhi_id = '$sakhi_id'";
  	$result = mysqli_query($conn,$sql);
  	$sql = "SELECT * FROM orderdetails WHERE sakhi_id = '$sakhi_id'";
  	$result = mysqli_query($conn,$sql);
  	$row = mysqli_fetch_assoc($result);
  	$quantity = $_POST["quantity"];
  	$item_name = $_POST["pname"];
  	#$sql = "UPDATE itemsdetails SET quantity=quantity-'$quantity' WHERE iname = '$item_name'";
  	#$result = mysqli_query($conn,$sql);
      $post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => 'xxxxxxxxxx',
    'To'    => '9029912132',
    'Body'  => 'Hi Aayush, your number 9123456780 is now turned confirmed.',
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
  	header("Location: track_sakhi.html");
  }
  else {
  	$sql = "UPDATE orderdetails SET sakhi_id = 0 WHERE sakhi_id = '$sakhi_id'";
  	$result = mysqli_query($conn,$sql);
  	//$array = $_SESSION["sakhis"];
  	unset($_SESSION['sakhis'][0]);
    $_SESSION["sakhis"] = array_values($_SESSION["sakhis"]);
    if($_SESSION["sakhis"][0] == null) {
    	//TODO: inform gruh udyog
    }
    //TODO: send message to next sakhi
    $post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => 'xxxxxxxxxx',
    'To'    => '9022052864',
    'Body'  => 'Hi Aayush, your number 9123456780 is now turned https://adityamaniar240196.000webhostapp.com/myorders.php.',
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
  	header("Location: myorders.php");
  }
?>