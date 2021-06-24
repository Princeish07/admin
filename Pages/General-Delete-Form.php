<?php
include 'Database/conn.php';
extract($_GET);
    $project_id=$_GET['project_id'];
$sql="DELETE FROM `project` where project_id='$project_id'";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
    $sql1="DELETE FROM `project_budget` where project_id='$project_id'";
    $result1=mysqli_query($conn,$sql1);
 }
 //Redirect to Display page
 header('location:http://localhost/ADMIN%20PANEL%20-%20Copy?projects');
 ?>
