<?php

$server="localhost";
$username="root";
$password="";
$database="school";

$connection=new mysqli($server,$username,$password, $database);

if($connection->connect_error){
    die("No connection". $connection->connect_error);
}

echo 'Connected Succesfully';
?>