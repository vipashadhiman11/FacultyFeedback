<?php
session_start();
if($_SESSION["username"]==true)
{
	$username=$_SESSION["username"];
      echo "welcome".$_SESSION["username"];

}
else
{
header('location:login.html');
}
?>
<a href="logout.php">LOGOUT</a>
<br>
<a href="feedback_cal.php">VIEW YOUR FEEDBACK HERE</a>
