<?php
session_start();
include('connect.php');

//if ($_SERVER["REQUEST_METHOD"] == "POST") 

	
  $Name =$_POST['Name'];
  $Password=$_POST['Password'];
  $RollNumber =$_POST['RollNumber'];
  $Email = $_POST['email'];
  $PhoneNumber =$_POST['PhoneNumber'];
  $Semester=$_POST['Semester'];
  $Yearofadmission = $_POST['Yearofadmission'];
  $Program = $_POST['Program'];
  $Course = $_POST['Course'];
  
  
  
  $FeedbackGiven = $_POST['FeedbackGiven'];
  $_SESSION["Named"]=$Name;
   $_SESSION["Password"]=$Password;
    $_SESSION["RollNumber"]=$RollNumber;
	 $_SESSION["Email"]=$Email;
 $_SESSION["PhoneNumber"]=$PhoneNumber;
	   $_SESSION["Semester"]=$Semester;
	    $_SESSION["Yearofadmission"]=$Yearofadmission;
		 $_SESSION["Program"]=$Program;
		 
		  $_SESSION["Course"]=$Course; 
		  $_SESSION["FeedbackGiven"]=$FeedbackGiven;
		 
  
	

	
	
	
	
	if($Semester==7||$Semester==8)
		header('location:elective_sub.html');
	else
	{
		$query="INSERT INTO student (s_username,name,password,email,phone,semester,yoa,program,course,given_feedback,times_left) VALUES('$RollNumber','$Name','$Password','$Email','$PhoneNumber','$Semester','$Yearofadmission','$Program','$Course','0','0');";
$query1="INSERT INTO admin (username,password) VALUES('$RollNumber','$Password');";
echo "heklllo";
	if(!mysqli_query($conn,$query)){
	echo "000000000000";
	echo mysqli_error($conn);
}
else
echo"successfully registered";
	
	}
		
?>
