
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
	require('db_config.php');

       $username=$_SESSION["username"];
    $sql = "SELECT q1,q2,q3,q4,q5,q6,q7,q8 FROM feedback WHERE f_username= 12345 ";
    $result = mysqli_query($mysqli,$sql);
    echo mysqli_error($result);
    $agg=0;
    $total=0;
    $array_count =array(0,0,0,0,0);
    while($row = mysqli_fetch_assoc($result))
    {
       $agg= $row['q1']+$row['q2']+$row['q3']+$row['q4']+$row['q5']+$row['q6']+$row['q7']+$row['q8'];
       $total=$total+1;
       $ans= round($agg/8);
       //echo $ans;
       //echo " ";
       if($ans==0) {$ans+=1;}
      $array_count[$ans-1]+=1;
      //echo $array_count[$ans-1];
      echo "hi";
    }


	$viewer = json_encode($array_count,JSON_NUMERIC_CHECK);

        /* Getting demo_click table data */
    $sql = "SELECT SUM(q4) as count FROM feedback";
    $click = mysqli_query($mysqli,$sql);
    $click = mysqli_fetch_all($click,MYSQLI_ASSOC);
    $click = json_encode(array_column($click, 'count'),JSON_NUMERIC_CHECK);







?>


<!DOCTYPE html>
<html>
<head>  
	<title>HighChart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
<a href="logout.php">LOGOUT</a>

<script type="text/javascript">


$(function () { 


    var data_click = <?php echo $click; ?>;
    var data_viewer = <?php echo $viewer; ?>;


    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Faculty feedback '
        },
        xAxis: {
            categories: ['1','2','3', '4','5']
        },
        yAxis: {
            title: {
                text: 'Number of Students'
            }
        },
        series: [ {
            name: 'Rating points',            data: data_viewer
        }]
    });
});



</script>


<div class="container">
	<br/>
	<h2 class="text-center">Here is your Feedback report for Part x </h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
<?
session_destroy();
?>