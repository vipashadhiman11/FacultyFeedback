<?
$result = mysqli_query($conn,"SELECT timetable.subject_name, timetable.subject, faculty.name, timetable.f_username FROM timetable, faculty where timetable.semester='$semester' AND timetable.program = '$Program' AND timetable.course='$courseName' AND timetable.f_username=faculty.f_username ;");
$rows = mysqli_num_rows($result);
echo "There are " . $rows . " rows in my table.";
  $numberofsubjects=$rows;




$sub=array();
$sub_code=array();
$name=array();
$fid=array();
// $sub=mysqli_fetch_row ($result );
while($row=mysqli_fetch_assoc($result)){
   $sub[]=$row["subject_name"];
   $sub_code[]=$row["subject"];
   $name[]=$row["name"];  
   $fid[]=$row["f_username"];
}

	header('location:file.php');	

?>