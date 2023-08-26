<?php

include 'db.php';
session_start();

$name=$_POST['name'];
$pass=$_POST['pass'];

$q="select * from farmer where fname='$name' AND password='$pass'";

if($r=mysqli_query($con,$q)){
    $n=mysqli_num_rows($r);
}
else
{
    $n=0;
}

$array=mysqli_fetch_assoc($r);

if($n==1)
{
    $_SESSION['id']=$array['fid'];
    header("Location:sales/sales.php");
    exit();
}
else
{
    $_SESSION['message']="error";
    header("Location:login.php");
    exit();
}

?>