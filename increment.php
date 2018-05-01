
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
$query="UPDATE student SET Semester= Semester+1 WHERE Semester<8;";

if(!mysqli_query($con,$query)){
	echo "000000000000";
}
else{
		echo "successfully incremented";
}

?>
