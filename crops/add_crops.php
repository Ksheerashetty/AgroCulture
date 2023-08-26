<?php
session_start();
include '../db.php';

$crop=$_POST['crops'];
$quantity=$_POST['quantity'];

$q="insert into crop (fid, cname, quantity)values('$_SESSION['id']','$crop','$quantity')";
if(mysqli_query($con,$q))
{
    header("Location:../crops/crop.html");
    exit();
}

?>