<?php

include('connect.php');


$new_fid=$_POST['FacultyId'];
$new_fname=$_POST['NewName'];
$new_fdept=$_POST['NewDepartment'];
$new_femail=$_POST['Email'];
$new_fphone=$_POST['phoneNo'];
$type=$_POST['Type'];
$new_fpassword=md5('NewPassword');
$frepassword=md5('ReenterPassword');


$query="UPDATE faculty SET name='$new_fname',email='$new_femail',department='$new_fdept',mobile='$new_fphone'
,password='$new_fpassword',type='$type' where f_username='$new_fid';";



if(!mysqli_query($conn,$query)){
	echo "000000000000";
	echo mysqli_error($conn);
}
else{
		echo "Faculty Updated Successfully";
}






?>
	
