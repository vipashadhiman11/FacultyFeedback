<!DOCTYPE html>
<html>
<head>
<title>Faculty Feedback System</title>
  <meta charset="utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php

include('connect.php');



 $semester= $_POST['semi'];
 $Program = $_POST['NameOfProgram'];
 $courseName = $_POST['coursename'];
$enrollno=$_POST['enrollno'];
 
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




?>
<header class="container">
<div class="col-sm-4">
  <img class="img-responsive" src="igdtuw.png" class="img-rounded" alt="Cinque Terre" width="250" height="200"> 

</div>

<div class="col-sm-8">
  <h1 class="text-center">Indira Gandhi Delhi Technical University For Women</h1>
  <h3 class="text-center"><small>(Established by Government of Delhivide Act of 2012)</small></h3>
  <h3 class="text-center"><small>(Formerly Indira Gandhi Institue of Technology)</small></h3>
</div>
</header>
<br>
<a href="logout.php">LOGOUT</a>
<div class="container">

<h5> The feedback is to be given only for the theory subjects.</h5>
<form class="form-inline" method="post" >
<div class="form-group">
  <label for="EnrollmentNo">Enrollment No:</label>
    <input type="text" name="enrollno" class="signup-item"nplaceholder="Enrollment No."></input>

  <label for="NameOfProgram">Name Of Program:</label>
    <select class="signup-item" name="NameOfProgram" required>
                                <option>Program</option>
                                    <option>Bachelor of Technology</option>
                                    <option>Masters of Technology</option>
                                    <option>Bachelor of Architecture</option>
                                    <option>Masters of Computer Applications</option>
                                </select> 
</div>

<div class="form-group">
  <label for="NameOfCourse">Name Of Course:</label>
<select class="signup-item" name="coursename" required>
                                    <option>CSE</option>
                                    <option>IT</option>
                                    <option>ECE</option>
                                    <option>Mech</option>
                            
                                </select> 
</div>





<div class="form-group">
  <label for="Semester">Semester:</label>
  <select class="form-control" id="semester" name="semi" >
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
  </select>

</div>
        <input type="submit" class="signup-submit" name="submit_btn" value="GO">

<br>
<h5>Please Fill the form from the rating 1-5 for Q1-Q8 for all subjects.</h5>
<h5><strong>Rating:</strong> (1) <mark>Unsatisfactory </mark>(2) <mark>Satisfactory </mark>(3)<mark>Good </mark>(4) <mark>Very Good </mark>(5) <mark>Outstanding </mark></h5>
  <div class="page-header"></div>

<h5><strong> FILL IN THE DETAILS OF THE SUBJECT AND THE RESPECTIVE FACULTY</strong></h5>

  <table class="table table-bordered">
    <thead>
      <tr class="something">
        <th class="col-md-1">S.No.</th>
        <th >Details</th>
         <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <th class="col-md-1"></th>
              <?php }?>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Subject Code</td>

       

<?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <td><?php echo $sub_code[$counter-1]?></td>
<?php }?>
      </tr>
      <tr>
        <td>2.</td>
        <td>Subject Name</td>
       <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <th class="col-md-1"><?php echo $sub[$counter-1]?></th>
       <?php }?>
      </tr>

 <tr>
        <td>3.</td>
        <td>Name Of Faculty</td>
      <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <th class="col-md-1"><?php echo $name[$counter-1]?></th>
       <?php }?>
      </tr>

     </tbody>
  </table>

<h5><strong> Part I: Imparting of knowledge/ instruction as per curriculum with the prescribed material.<strong></h5>

  <table class="table table-bordered">
    <thead>
      <tr class="something">
        <th class="col-md-1">S.No.</th>
        <th class="col-md-5">Parameters</th>
              <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <th class="col-md-1"></th>
               <?php }?>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
     <td>The lectures were well structured and focused as per the course curriculum.</td>
           
      <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P1Q1S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>


      </tr>
      <tr>
        <td>2</td>
        <td>The teacher has fair knowledge of the subject.</td>
           
              <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P1Q2S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>

     </tr>
      <tr>
        <td>3</td>
        <td>Methodology of teaching is stimulating and effective.</td>
              
              <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P1Q3S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>
      </tr>
 <tr>
     <td>4</td>
     <td>The teacher spends sufficient time for course coverage as per the syllabus.</td>
      
              <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P1Q4S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>
      </tr>
    </tbody>
  </table>

<h5><strong>  Part II: Participatory and innovative T/L process with material for problem based learning, case studies, group discussion.<strong></h5>

<table class="table table-bordered">
    <thead>
      <tr class="something">
        <th class="col-md-1">S.No.</th>
        <th class="col-md-5">Parameters</th>
           <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <th class="col-md-1"></th>
              <?php }?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>5</td>
        <td>The teacher encourages students to raise pertinent questions and make lectures participative.</td>
            
              <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P2Q1S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>
      </tr>
      <tr>
        <td>6</td>
        <td>The teacher gives assignments and solves typical problems/case studies in the class.</td>
                  
              <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P2Q2S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>      </tr>
     </tbody>
  </table>

<h5><strong>  Part III: Teacher relationship(1st year B.tech can fill Part A OR part B) (All other years and semesters students of all programs should fill part B).<strong></h5>

  <table class="table table-bordered">
    <thead>
      <tr class="something">
        <th class="col-md-1">S.No.</th>
        <th class="col-md-5">Parameters</th>
    <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

        <th class="col-md-1"></th>
              <?php }?>

              
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>A</td>
        <td> <p>7. The teacher adheres to schedules and enforces discipline.</p>
   
<p>8. The teacher uses latest ICT techniques in the class such as ppt/ohp besides chalk/marker board.</p></td>
                    <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P3Q1S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>   
      </tr>
      <tr>
        <td>B</td>
        <td><p> 7. The teacher has enthusiasm and concern for students.</p> <p>8. The teacher shows S/W implementation of problems/ case studies/web study material.</td>
                    <?php for($counter = 1;$counter<=$numberofsubjects;$counter++){ ?>

           <td>
    <?= "<input type=\"text\" class=\"form-control\"   minvalue=\"1\" maxvalue=\"5\" name=\"P3Q2S$counter\" style=\"width:90px;\"></input>";?>
</td>
       <?php }?>   
      </tr>
     </tbody>
  </table>
  <div class="text-center">        <input type="submit" class="signup-submit" name="submit_btn" value="SUBMIT">
</div>
</form>
<br>
<?php

//echo "hello";

for($i=1;$i<=4;$i++){


$q1=$_POST["P1Q1S$i"];
$q2=$_POST["P1Q2S$i"];
$q3=$_POST["P1Q3S$i"];
$q4=$_POST["P1Q4S$i"];
$q5=$_POST["P2Q1S$i"];
$q6=$_POST["P2Q2S$i"];
$q7=$_POST["P3Q1S$i"];
$q8=$_POST["P3Q2S$i"];


// echo $q1;
$subb=$sub_code[$i-1];
$faculty=$fid[$i-1];
// echo $sub_code[$i-1];
// echo $fid[$i-1];

// $fid="SELECT f_username FROM `timetable` WHERE subject='$subb';";
// $f_username= mysqli_fetch_row($fid); 
// echo $f_username;
//  echo mysqli_error($con);
$year=date('Y');
// echo $courseName;
// echo $f_username;
$query="INSERT INTO `feedback` (`s_username`, `subject`, `yof`, `semester`, `program`,
        `course`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `text_feedback`, `f_username`) 
        VALUES ('$enrollno', '$subb', '$year', '$semester', '$Program', 
        '$courseName', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', 'NONE', '$faculty');";


if(!mysqli_query($conn,$query)){
  echo "000000000000";
   // echo mysqli_error($con);
}
else{
    echo "subject $i successfully inserted";
}

}

$que1="UPDATE student SET given_feedback ='1' WHERE s_username ='$enrollno';";

if(!mysqli_query($conn,$que1)){
  echo "000000000000";
   // echo mysqli_error($con);
}
else{
    echo "student updated";
}



?>


</div>
</body>
</html>
