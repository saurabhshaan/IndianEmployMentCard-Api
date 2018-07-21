<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');

$email=$_POST['email'];
$verify=$_POST['Verified'];


$sql="UPDATE `IndividualSignUp` SET `hs_verification_status`='$verify' WHERE Email='$email'";



if(mysqli_query($con,$sql))
 {
   echo "Successfully updated";
 }

  else

{
	echo mysqli_error($con);
      echo 'Failed to uodate';
}

  mysqli_close($con);

?>