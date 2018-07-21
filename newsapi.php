<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','1234');	
	define('DB','IndianEmploymentCard');	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
$sql="select * from News";
$result=mysqli_query($con,$sql);

$response=array();
while($row=mysqli_fetch_array($result))
{
array_push($response,array(

"title"=>$row["title"],
"newssource"=>$row["newssource"],
"description"=>$row["description"],

"image"=>$row["image"]
));
}

 echo json_encode($response);


?>