<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','IndianEmploymentCard');
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');
// print_r($_POST);
$firstname=$_POST['First_Name'];
$lastname=$_POST['Last_Name'];
$middleName=$_POST['Middle_Name'];
$Email=$_POST['Email'];
$AdharNumber=$_POST['Adhar_Number'];
$Addline1=$_POST['Add_line1'];
$Addline2=$_POST['Add_line2'];
$Addline3=$_POST['Add_line3'];
$AddPincode=$_POST['Pincode'];
$AddState=$_POST['State'];
$AddCountry=$_POST['Country'];

$hscholl=$_POST['Highschool_Board'];
$hrollnumber=$_POST['Highschool_Roll_Number'];
$hs_verification_status=$_POST['HS_Veirfication_Status'];

$imedite=$_POST['Intermediate_Board'];
$irollnumber=$_POST['Intermediate_Roll_Number'];
$im_verification_status=$_POST['IM_Verification_Status'];

$gcourse=$_POST['Graduation_Course'];
$gstatus=$_POST['Graduation_Status'];
$guniversity=$_POST['Graduation_University'];
$grollnumber=$_POST['Graduation_Roll_Number'];
$gr_Qualification_Status=$_POST['GR_Verification_Status'];

$experience=$_POST['Experience'];
$semail=$_POST['Semail'];

$fromdate=$_POST['FromDate'];

$e_verification_status=$_POST['E_V_Status'];

$encodedImage=$_POST['Person_Image'];
$password112=$_POST['Password'];
$cnfrmpassword2=$_POST['Confrm_pass'];

// trigger_error($encodedImage);

$decodedImage=base64_decode($encodedImage);
file_put_contents("./image/".$Email.'.jpg',$decodedImage);

$imagePath=("http://172.28.172.2:8080/IndianEmploymentCard/image/".$Email.'.jpg');

$sql="INSERT INTO `IndividualSignUp`(`FirstName`, `LastName`, `MiddleName`, `Email`, `AdhaarNumber`, `Addline1`, `Addline2`, `Addline3`, `Pincode`, `State`, `Country`, `HighSchoolBoard`, `HighSchoolRollNumber`, `hs_verification_status`, `IntermediateBoard`, `IntermediateRollNumber`, `im_verification_status`, `GraduationCourse`, `GraduationStatus`, `GraduationUniversity`, `GraduationRollNumber`, `gr_Qualification_Status`, `Company_Name`, `Company_email`, `Experience_in_Count`, `Experience_Status`, `PersonImage`, `Password`, `Conform_password`) VALUES ('$firstname','$lastname','$middleName','$Email','$AdharNumber','$Addline1','$Addline2','$Addline3','$AddPincode','$AddState','$AddCountry','$hscholl','$hrollnumber','$hs_verification_status','$imedite','$irollnumber','$im_verification_status','$gcourse','$gstatus','$guniversity','$grollnumber','$gr_Qualification_Status','$experience','$semail','$fromdate','$e_verification_status','$imagePath','$password112','$cnfrmpassword2')";

 if(mysqli_query($con,$sql))
 {
   echo "Registration Successfull";
 }
  else
{
	echo mysqli_error($con);
      echo 'Registrationfailure';
}
  mysqli_close($con);
 ?>