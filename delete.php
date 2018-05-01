
<?php


include('connect.php');
/*$con=mysqli_connect('localhost','root','anonymous001');

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
  

$query="DELETE FROM student WHERE s_username=$enroll_number";

if(!mysqli_query($conn,$query)){
	echo "000000000000";
}
else{
		echo "successfully deleted $enroll_number";
}

?>
