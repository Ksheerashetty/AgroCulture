<?php
session_start();
include '../db.php';

$eqip=$_POST['equipment'];
$date=$_POST['date'];
$cost=$_POST['cost'];
$fid=$_POST['fid'];

$q="insert  into equipment (ename,fid,date,cost)values('$eqip','$fid','$date','$cost')";

if(mysqli_query($con,$q)){
    header("Location:../equipment/equipment.php");
    exit();
}


?>