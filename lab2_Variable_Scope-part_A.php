<?php
$a=1;
$b="helloworld";
$c=3.4;
$d=True;
$arr[3]=array("heyy","all","hi");
echo "DATATYPES  <br>" ;
echo var_dump($a) ;
echo "<br>";
echo var_dump($b);
echo "<br>";
echo var_dump($c);
echo "<br>";
echo var_dump($d);
echo "<br>";
echo var_dump($arr);
echo "<br>";
echo"<br>";
//variable scope

   echo "VARIABLE SCOPE  <br>";
   $greetings="sawadhe krub";
   
 function greet(){
    global $greetings;
    $var="mai";
    static $v=10;
    echo "This is  the global variable $greetings";// print the global variable
    echo "<br>";
    echo "This is the local variable $var";
    echo "<br>";
    echo "This is the static variable $v";
    //echo "This is the static variabke $ab";
 }
 greet();
?>
