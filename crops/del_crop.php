<?php

include '../db.php';
$del=$_POST['del'];
$q="delete from crop where cid=\"$del\"";
if(mysqli_query($con,$q))
{
    header("Location:../crops/crop.php");
    exit();
}

?>