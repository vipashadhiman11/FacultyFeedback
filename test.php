<?php

include('connect.php');
/*
$con=mysqli_connect('localhost','root','anonymous001');

if(!$con)
	 { 
	    echo'Not Connnected to server';
	 }
	 if(!mysqli_select_db($con,'fac_feed'))
	 {
	    echo'Database Not selected';
     }
*/
$enroll_number=$_POST['Enrollmentno'];
  $name=$_POST['Name'];
  $programme=$_POST['Programme'];
  $course=$_POST['course'];
  $semester=$_POST['Semester'];
  $yoa=$_POST['YearOfAdmission'];
  $email=$_POST['Email'];
  $password=md5['Password'];
  $phone=$_POST['phone'];


if ($programme=="Bachelor of Technology")
	$times_left= 8-$semester+1;
if ($programme == "Masters of Technology")
	$times_left= 4-$semester+1;
if ($programme=="Bachelor of Architecture")
	$times_left= 10-$semester+1;
if ($programme == "Masters of Computer Applications")
	$times_left= 4-$semester+1;


$query="INSERT INTO `student` (`s_username`, `name`, `password`, `email`, `phone`, `semester`, `yoa`, `program`, `course`, `given_feedback`, `times_left`) 
VALUES ('$enroll_number', '$name', '$password', '$email', '$phone', '$semester', '$yoa', '$programme', '$course', '0', '$times_left');";


f
if(!mysqli_query($conn,$query)){
	echo "000000000000";
}
else{
		echo "$enroll_number successfully inserted";
}


?>
	

