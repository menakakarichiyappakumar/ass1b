<?php

$server="localhost";
$username="root";
$password="root";
$database = "sample";

$connect=new mysqli($servername,$username,$password,$database);

if($connect->connect_error)
    echo "Connection error:" .$connect->connect_error;
else
    echo "Connection is created successfully";     
?>
