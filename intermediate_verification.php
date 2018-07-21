<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');

$email=$_POST['email'];
$verify=$_POST['Verified'];


$sql="UPDATE `IndividualSignUp` SET `im_verification_status`='Verified' WHERE Email=	
'vvb'";


$result=mysqli_query($con,$sql);

	trigger_error('hello1');

if ($result) {
	# code...
	$sql = "SELECT hs_verification_status, Im_verification_status,gr_Qualification_Status,Experience_Status FROM IndividualSignUp WHERE Email = 'vvb'";

	$result=mysqli_query($con,$sql);

	$Flag=0;
if (!$sql){
	echo "value ni mili";
}
else{
	$row = mysqli_fetch_assoc($result);
print_r($row);
$hs= $row['hs_verification_status'];
$im= $row['Im_verification_status'];
$gr= $row['gr_Qualification_Status'];
$ex= $row['Experience_Status'];

echo $hs;


}

	if ($hs == "Verified" && $im== "Verified" && $gr== "Verified" && $ex == "Verified") {
		echo $responce['HS_Status'];
		# code...
					$iec_number = rand(111111111111111,9999999999999999);
					echo $iec_number;

		 				$sql="UPDATE IndividualSignUp SET IEC_Number=$iec_number WHERE Email='vvb'";
		 			$dd =	mysqli_query($con,$sql);

		 				print_r($dd);

						echo "IEC_Number generated";

			
	}else{
		echo "Not Available";
	}
}
?>