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
$Name=$_POST['Name'];
  $Facultyid=$_POST['Facultyid'];
  $password=md5['Password'];
  $Department=$_POST['Department'];
  $Email=$_POST['Email'];
  $Mobileno=$_POST['Mobileno'];
  $type=$_POST['type'];

$query="INSERT INTO `faculty` (`f_username`, `name`, `password`, `department`, `email`, `mobile`, `type`) 
VALUES ('$Facultyid', '$Name', '$password', '$Department', '$Email', '$Mobileno', '$type');";

if(!mysqli_query($conn,$query)){
	echo "000000000000";
}
else{
		echo "$Name of id $Facultyid inserted successfully";
}

?>
	

