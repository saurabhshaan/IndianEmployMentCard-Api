<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');

$user_name = $_POST['Email'];
$user_pass = $_POST['Password'];


 	$sql = "SELECT `CompanyName` FROM `CorporateSectorUser` WHERE CompanyEmail='$user_name' and Conform_password='$user_pass'";

$result=mysqli_query($con,$sql);

$check=mysqli_fetch_array($result);
if (isset($check)) {
	# code...

	echo ("success");
}else
{
echo ("Failed");	
}
?>