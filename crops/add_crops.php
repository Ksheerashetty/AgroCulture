<?php
session_start();
include '../db.php';

$crop=$_POST['crops'];
$quantity=$_POST['quantity'];
$id=$_SESSION['id'];

$q="insert into crop (fid, cname, quantity)values('$id','$crop','$quantity')";
if(mysqli_query($con,$q))
{
    header("Location:../crops/crop.html");
    exit();
}

?>