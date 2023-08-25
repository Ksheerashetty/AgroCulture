<?php

$serverName="localhost";
$userName="root";
$password="";
$databaseName="agroculture";

$con = mysqli_connect($serverName,$userName,$password,$databaseName);

if(!$con)
{
    echo "<h1>error</h1>";
}

?>