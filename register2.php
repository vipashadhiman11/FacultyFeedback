<?php

session_start();
include('connect.php');



echo'session value';

#print_r($_SESSION);


$Name1=$_SESSION["Named"];
$Password=$_SESSION["Password"];
  $RollNumber1 = $_SESSION["RollNumber"];
	$Email= $_SESSION["Email"];
 $PhoneNumber=$_SESSION["PhoneNumber"];
	   $Semester=$_SESSION["Semester"];
	    $Yearofadmission=$_SESSION["Yearofadmission"];
		 $Program=$_SESSION["Program"];
		 
		 $Course= $_SESSION["Course"]; 
		  $FeedbackGiven=$_SESSION["FeedbackGiven"];



$sub_name=$_POST['sub_name'];
$sub_code=$_POST['sub_code'];
$fac_name=$_POST['teacher_name'];



$query="INSERT INTO student (s_username,name,password,email,phone,semester,yoa,program,course,given_feedback,times_left,e_sub_name,e_sub_code,e_fac_name) VALUES('$RollNumber1','$Name1','$Password','$Email','$PhoneNumber','$Semester','$Yearofadmission','$Program','$Course','0','0','$sub_name','$sub_code','$fac_name');";
$query1="INSERT INTO admin (username,password) VALUES('$RollNumber','$Password');";












if(!mysqli_query($conn,$query)){
	echo mysqli_errno($conn) . '----' . mysqli_error($conn);
}
else
	echo'registration successfull';
session_destroy();
?>
