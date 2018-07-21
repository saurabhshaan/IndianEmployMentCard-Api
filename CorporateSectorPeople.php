<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');
 
$full_name=$_POST['CName'];
$c_email=$_POST['Cemail'];
$c_address=$_POST['CAddress'];
$pan_number=$_POST['panNuber'];
$numBrnch=$_POST['NumBrnch'];
$tin_number=$_POST['TinNum'];
$ceo_name=$_POST['Ceoname'];
$password=$_POST['Password'];
$cnfrm_password=$_POST['Conform_Password'];

$sql="INSERT INTO `CorporateSectorUser`(`CompanyName`, `CompanyEmail`, `CompanyAddress`, `NumberOfBranches`, `PANnumber`, `TINnumber`, `CEOname`, `Password`, `Conform_password`) VALUES ('$full_name','$c_email','$c_address','$numBrnch','$panNuber','$tin_number','$ceo_name','$password','$cnfrm_password')";

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