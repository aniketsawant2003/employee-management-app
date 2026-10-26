<?php

$host = "mysql";
$user = "root";
$password = "Root@123";
$database = "employee_db";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){
    die("Database Connection Failed");
}

?>
