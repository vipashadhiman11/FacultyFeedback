 <?php

include('connect.php');


$enroll_number=$_POST['Enrollmentno'];
$new_name=$_POST['NewName'];
$new_programme=$_POST['NewProgramme'];
$new_semester=$_POST['NewSemester'];
$new_yoa=$_POST['NewYearOfAdmission'];
$new_email=$_POST['Email'];
$new_phone=$_POST['phoneNo'];
$new_password=md5('NewPassword');
$repassword=md5('ReenterPassword');



$query="UPDATE student SET name='$new_name',email='$new_email',program='$new_programme',semester='$new_semester',phone='$new_phone'
,yoa='$new_yoa',password='$new_password' where s_username='$enroll_number';";



  

if(!mysqli_query($conn,$query)){
	echo "000000000000";
}
else{
		echo "data successfully updated";
}


?>
	
