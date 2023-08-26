<?php

include '../db.php';
$del=$_POST['del'];
$q="delete from equipment where ename=\"$del\"";
if(mysqli_query($con,$q))
{
    header("Location:../equipment/equipment.php");
    exit();
}

?>