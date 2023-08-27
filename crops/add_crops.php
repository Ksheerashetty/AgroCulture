<?php
session_start();
include '../db.php';

$crop=$_POST['crops'];
$quantity=$_POST['quantity'];
$id=$_SESSION['id'];

$q1="select * from crop where cname='$crop'";
if($r=mysqli_query($con,$q1)){
    $n=mysqli_num_rows($r);
}
else
{
    $n=0;
}
if($n==0)
{
$q="insert into crop (fid, cname, quantity)values('$id','$crop','$quantity')";
if(mysqli_query($con,$q))
{
    header("Location:../crops/crop.php");
    exit();
}
}
else
{
    $_SESSION['message']="error";
    header("Location:../crops/add_crop.php");
    exit();
}

?>