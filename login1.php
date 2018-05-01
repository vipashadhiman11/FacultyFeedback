]<?php

include_once('connect.php');
//$session_start();
//echo "hi";
	
session_start();

  $Username1 =$_POST['Username'];
  $Password1=$_POST['Password'];
  $num = $Username1;
$numlength = strlen((string)$num);
//echo $numlength;
  if($numlength==11)
  {
	  
  $query = "SELECT * FROM student WHERE s_username='$Username1' and password='$Password1'";
  if ($result=mysqli_query($conn,$query))
  {
	  
  $rowcount=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);
  if($rowcount==1)
  {
  echo "Login successfull";
  {
	  $sql="SELECT given_feedback from student WHERE s_username='$Username1' and password='$Password1'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

// echo $row[0];
   if($row[0]==0)
    {
      $_SESSION["username"]=$Username1;
	header('location:file.php');	

  }
  else
	  echo"You have already filled the form";
  }
  }
else 
	echo "invalid credentials";
  } 
  }
  if($numlength==5)
  {
	  $query="SELECT * from faculty WHERE f_username='$Username1' and password='$Password1'";
	   if ($result=mysqli_query($conn,$query))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);
  if($rowcount==1)
  {
  echo "Login success full";
$_SESSION["username"]=$Username1;
header('location:redirect_fac.php');
}
else 
	echo "invalid credentials";
  
  }
  }
	
     exit;
	
?>
