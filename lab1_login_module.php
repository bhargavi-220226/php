<?php
$email = $_POST['email'];
$password =$_POST['password'];
$correct_mail ="bhargavi.allaka369@gmail.com";
$correct_password="teja@2007";
if ($email === $correct_mail && $password === $correct_password) {
    echo "Login Successful<br>";
    print "Welcome ";
} else {
    die("Invalid Username or Password");
}
?>
