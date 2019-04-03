<?php

$server="localhost";
$username="root";
$password="";
$database="school";
$connection = new mysqli($server,$username,$password, $database);

if ($connection->connect_error){
    die("No connection". $connection->connect_error);
}
else {
    echo "Connected Successfully";
}
$sql="CREATE DATABASE school";
if( mysqli_query($connection, $sql)){
    echo 'Database Created Successfully';
}else{
    echo 'Error in creating Database' .mysqli_error($connection);
}

?>