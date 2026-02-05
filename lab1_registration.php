<?php
$username = $_POST['username'];
$password = $_POST['password'];
$username = trim($username);
$password = trim($password);
$username = strtolower($username);
if (strlen($username) < 5) {
    die("Username must contain at least 5 characters");
}

if (strlen($password) < 6) {
    die("Password must contain at least 6 characters");
}

echo "Registration Successful<br>";
print "Welcome $username";

?>  
