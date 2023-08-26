<?php
include '../db.php';
session_start();

$fid=$_SESSION['id'];
$cname=$_POST['crop'];
$cid=$_POST['cid'];
$date=$_POST['date'];
$total=$_POST['total'];

$q="INSERT INTO sales(fid, cid,cname, day, total) VALUES ('$fid','$cid','$cname','$date','$total')";

if(mysqli_query($con,$q)){
    header("Location:../sales/sales.php");
    exit();
}
?>