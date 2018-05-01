<?php
	$dbHost = "localhost";
	$dbDatabase = "faculty_feedback";
	$dbPasswrod = "anonymous001";
	$dbUser = "root";


	$mysqli = mysqli_connect($dbHost, $dbUser, $dbPasswrod, $dbDatabase);

	if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Success";
}

?>
