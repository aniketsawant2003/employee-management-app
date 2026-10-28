<?php

$conn = mysqli_connect(
    "mysql",
    "root",
    "Root@123",
    "employee_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";
?>
