<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");

if (!$conn) {
    die("Database connection failed");
}
echo "Database connected successfully";
?>
