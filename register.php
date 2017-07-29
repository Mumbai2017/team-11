<?php 
	session_start();
	include("connection.php");

$emailid = trim($_POST['emailid']);
$emailid = strip_tags($emailid);
$emailid = htmlspecialchars($emailid);

$pass = trim($_POST['regpassword']);
$pass = strip_tags($pass);
$pass = htmlspecialchars($pass);

$firstname = trim($_POST['firstname']);
$firstname = strip_tags($firstname);
$firstname = htmlspecialchars($firstname);

$area = trim($_POST['address']);
$area = strip_tags($area);
$area = htmlspecialchars($area);

$contact = trim($_POST['contact_number']);
$contact = strip_tags($contact);
$contact = htmlspecialchars($contact);

$radioholder=$_POST['stakeholder'];

if($radioholder=="customer")
{
$check_email = $conn->query("SELECT id FROM customer WHERE id='$emailid'");
$count = $check_email->num_rows;	

if($count==0)
{
$query = $conn->query("INSERT INTO customer(id,password,name,location,contact) VALUES('$emailid','$pass','$firstname','$area','$contact')");

	echo "<script type='text/javascript'>alert('Record created successfully.');</script>";
}
else
{
	echo "<script type='text/javascript'>alert('This email already exists.');</script>";
}

}
else if($radioholder=="sakhi")
{
	$check_email = $conn->query("SELECT id FROM customer WHERE id='$emailid'");
$count = $check_email->num_rows;	

if($count==0)
{
$query = $conn->query("INSERT INTO sakhi(id,password,name,location,contact) VALUES('$emailid','$pass','$firstname','$area','$contact')");

	echo "<script type='text/javascript'>alert('Record created successfully.');</script>";
}
else
{
	echo "<script type='text/javascript'>alert('This email already exists.');</script>";
}

}
$conn->close();
?>
	
