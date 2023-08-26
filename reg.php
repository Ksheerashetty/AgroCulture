<?php

include 'db.php';
session_start();

$name=$_POST['name'];
$pass=$_POST['pass'];
$no=$_POST['no'];
$add=$_POST['add'];

$q1="select * from farmer where fname='$name'";

if($r1=mysqli_query($con,$q1))
{
    $n=mysqli_num_rows($r1);
}
else
{
    $n=0;
}

if($n>=1)
{
    $_SESSION['message']="error";
    header("Location:register.php");
    exit();
}
else
{
    $q2="INSERT INTO farmer(fname,password, phone, address) VALUES('$name','$pass','$no','$add')";
    if($r2=mysqli_query($con,$q2))
    {
        header("Location:login.php");
        exit();
    }
}

?>