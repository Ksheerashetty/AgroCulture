<?php

include '../db.php';
$del=$_POST['del'];
$q="delete from sales where sid=\"$del\"";
if(mysqli_query($con,$q)){
    header("Location:../sales/sales.php");
    exit();
}

?>