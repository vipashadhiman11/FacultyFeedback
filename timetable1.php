<?php

include('connect.php');

echo "hi";


//if ($_SERVER["REQUEST_METHOD"] == "POST") 
	echo "hello above";
  $programme =$_POST['programme'];
  $course=$_POST['course'];
  $semester =$_POST['semester'];
  $year = $_POST['Year'];
  $subject =$_POST['subject'];
  $subjectcode=$_POST['subjectcode'];
  $facultyid = $_POST['facultyid'];
	
$query="INSERT INTO timetable (yof,program,course,subject, subject_name, semester,f_username) VALUES('2001','$programme','$course','$subjectcode','$subject','8','845');";

echo "heklllo";
if(!mysqli_query($conn,$query)){
	echo "000000000000";
	echo mysqli_error($conn);
}
else{
		echo "Academic information successfully inserted";
}


echo $programme;
echo "<br>";
echo $course;
echo"<br>";
echo $semester;
echo "<br>";
echo $year;
echo "<br>";
echo $subject;
echo "<br>";
echo $subjectcode;
echo "<br>";
echo $facultyid;
?>