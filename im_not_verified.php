<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');
 
$not_verify=$_POST['No_Data_Found'];

$sql="UPDATE `IndividualSignUp` SET `im_verification_status`='$not_verify'";

echo "$sql";

 if(mysqli_query($con,$sql))
 {
  $a=array("Success");
   echo json_encode($a);
  }
  else
{
      echo 'Unsuccessful';
}
  mysqli_close($con);
?>