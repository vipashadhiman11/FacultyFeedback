
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
$Facultyid=$_POST['Facultyid'];
  

$query="DELETE FROM faculty WHERE f_username=$Facultyid";

if(!mysqli_query($conn,$query)){
	echo "000000000000";
}
else{
		echo "successfully deleted $Facultyid";
}


?>
