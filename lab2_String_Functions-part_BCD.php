<?php

//hardcode 
$uemail="bahrgavi.allaka369@gmail.com";
$pass="bhargavi369";
$username=$_POST['email'];
$password=$_POST['password']; 
if($email==$uemail&& $password==$pass){
    echo "login successfull";
}
else{
    echo "login unsuccessfull";
}
echo "<br><br>STRING FUNCTIONS <BR>";
$t=" PHP IS a  VERY COMPLICATED language  ";
echo "string is $t <br> ";
echo "BASIC FUNCTIONS <BR>";
echo "length of the string is : ",strlen($t);
echo "number of words in a string is: ",str_word_count($t);
echo "reverse of the string is: ",strrev($t) ;
echo "<br>" ;
echo  " <br> CASE CONVERSION <br>";
echo "uppercase is : ",strtoupper($t);
echo " <br> lowercase is : ",strtolower($t);
$v="tejaswini";
echo " <br> (uc) is : ",ucfirst($v);//first letter in a string is into capital
echo " <br> uc words  are : ",ucwords($t);//first letter in a word is capital to entire string
echo " <br> search  is : ",strpos($t,"P");
echo " <br> string replace  is : ",str_replace("language","LANGUAGE",$t);
echo " <br> lowercase is : ",strtolower($t);
ECHO "<br><br> SUBSTRING & TRIMMING";
ECHO "<br> substring is ",substr($t,0,3);
ECHO "<br> trim is ",trim($t);
ECHO "<br> left trim is ",ltrim($t);
ECHO "<br> right trim is ",rtrim($t);
ECHO "<br> <br> STRING COMPARISION ";
ECHO "<br> string comparision  is ",STRCMP("TEJASWINI",$v);
ECHO "<br> string case compare is ",strcasecmp("tejaswini",$v);
$text="<h1> php &html</h1>";
ECHO "<br> special character  is ",htmlspecialchars($text);
$u='it is a php work space';
ECHO "<br> addslashes is: ",addslashes($u);
?>
