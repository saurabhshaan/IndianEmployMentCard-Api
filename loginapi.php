<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','1234');	
	define('DB','IndianEmploymentCard');	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	$user_name = $_POST['Email'];
$user_pass = $_POST['Password'];

$sql = "SELECT `FirstName`,'LastName','MiddleName','Email','AdhaarNumber','Qualification_Status','Experience_Status' FROM `IndividualSignUp` WHERE Email='$user_name' and Conform_password='$user_pass'";
$result=mysqli_query($con,$sql);

$response=array();
while($row=mysqli_fetch_array($result))
{
array_push($response,array(

"FirstName"=>$row["FirstName"],
	"LastName"=>$row["LastName"],
	"MiddleName"=>$row["MiddleName"],
	"Email"=>$row["Email"],
	"AdhaarNumber"=>$row["AdhaarNumber"],
	"Qualification_Status"=>["Qualification_Status"],
	"Experience_Status"=>["Experience_Status"]
));
}

 echo json_encode($response);


?>
