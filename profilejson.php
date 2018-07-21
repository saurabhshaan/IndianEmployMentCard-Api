<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');

$user_name = $_POST['Email'];

 	$sql = "SELECT * FROM `IndividualSignUp` WHERE Email='$user_name' ";

$result=mysqli_query($con,$sql);
$response=array();

$Flag=0;
while($row=mysqli_fetch_array($result))
{
$Flag=1;
array_push($response,array(

	"FirstName"=>$row["FirstName"],
	"LastName"=>$row["LastName"],
	"MiddleName"=>$row["MiddleName"],
	"Email"=>$row["Email"],
	"AdhaarNumber"=>$row["AdhaarNumber"],
	"hs_verification_status"=>$row["hs_verification_status"],
	"Experience_Status"=>$row["Experience_Status"]
));
}
if ($Flag) {
	# code...
	echo json_encode($response);
}else{
echo ("Failed");	
}
?>