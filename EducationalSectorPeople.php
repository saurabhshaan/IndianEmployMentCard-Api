<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"");
define('DB','IndianEmploymentCard');
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');
 
$universityname=$_POST['UniName'];
$universityemail=$_POST['UEmail'];
$universityaddress=$_POST['UniAddress'];
$ugcnumber=$_POST['UniUGCNuber'];
$numberofcollege=$_POST['NumClz'];
$registernumber=$_POST['UniRegNum'];
$vcname=$_POST['UniVCname'];
$password=$_POST['Password'];
$cnfrm_password=$_POST['CnfrmPass'];

$sql="INSERT INTO `EducationSectorUser`(`UniversityName`, `UniversityEmail`, `UniversityAddress`, `UGCNumber`, `NumberOfCollege`, `RegiterNumber`, `VCname`, `Password`, `Conform_password`) VALUES ('$universityname','$universityemail','$universityaddress','$ugcnumber','$numberofcollege','$registernumber','$vcname','$password','$cnfrm_password')";
echo "$sql";

 if(mysqli_query($con,$sql))
 {
  $a=array("Registration Successfull");
   echo json_encode($a);
  }
  else
{
      echo 'Registrationfailure';
}
  mysqli_close($con);
 ?>