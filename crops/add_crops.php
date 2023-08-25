<?php

include '../db.php';

$crop=$_POST['crops'];
$quantity=$_POST['quantity'];

$q="insert into crop (fid, cname, quantity)values('121','$crop','$quantity')";
if(mysqli_query($con,$q))
{
    header("Location:../crops/crop.html");
    exit();
}

?>