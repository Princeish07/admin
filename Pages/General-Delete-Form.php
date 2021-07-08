<?php
include 'Database/conn.php';
error_reporting(0);
extract($_GET);
$project_id=$_GET['project_id'];
$sql="DELETE FROM `project` where project_id='$project_id'";
 $result=mysqli_query($conn,$sql);
 //Redirect to Display page
 if($result)
 {
    $sql1="DELETE FROM `project_budget` where project_id='$project_id'";
    $result1=mysqli_query($conn,$sql1);
 }
 //Redirect to Display page
 

 ?>
