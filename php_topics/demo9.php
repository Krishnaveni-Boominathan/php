<h3>variable</h3>
<?php
$greeting = "Hello";
echo '$greeting Everyone';
?>
<h3>variable scope - local</h3>
<?php
$num = 14;
function myFun(){
    $num = 27;
    echo "variable local: $num";
    echo "<br>";
}
myFun();
echo "variable outside local: $num";
?>
<h3>variable scope - global</h3>
<?php
$num = 14;
function myFunc(){
    echo "variable local: $num";
    echo "<br>";
}
myFunc();
echo "variable outside local: $num";
?>
<h3>variable scope - global(global keyword)</h3>
<?php
$num = 14;
function myFunct(){
    global $num;
    echo "variable local: $num";
    echo "<br>";
}
myFunct();
echo "variable outside local: $num";
?>
<h3>variable scope - static</h3>
<?php

function myFuncti(){
    static $num=27;
    $sum = 14;
    $num++;
    $sum++;
    echo $num;
    echo "<br>";
    echo $sum;
    echo "<br>";
}
myFuncti();
myFuncti();
?>
<h3>variable variables</h3>
<?php
$a = 'hello';
$$a = 'everyone';
echo $hello;
?>
<h3>echo statement</h3>
<?php
$fname = "krish";
$lname = "boomi";
echo "My name is ".$fname,$lname;
?>
<h3>print statement</h3>
<?php
// $fname = "krish";
// $lname = "boomi";
// print "My name is ".$fname,$lname;
?>
<h3>echo statement(return value)</h3>
<?php
// $fname = "krish";
// $lname = echo $fname. "boomi";
// echo "My name is ".$lname;
?>
<h3>print statement(return value)</h3>
<?php
$fname = "krish";
$lname = print $fname. "boomi";
echo "<br>";
echo "My name is ".$lname;
?>
<h3>print_r function</h3>
<?php
$arr = array("krish", "bhavi");
print_r($arr);
echo "<br>";
$arr = "krishnaveni";
print_r($arr);
echo "<br>";
$arr = array('krish'=>20, "pree"=>"22");
print_r($arr);
?>
<h3>string functions</h3>
<?php
echo strlen("krish");
echo "<br>";
echo str_word_count("krish boomi");
echo "<br>";
echo strrev("krish");
echo "<br>";
echo strpos("krish bhavi","b");
echo "<br>";
echo str_replace("bhavi","boomi","krish bhavi");
echo "<br>";
echo addcslashes("Hello everyone", "e");
echo "<br>";
echo addslashes("hello 'all'");
echo "<br>";
echo bin2hex("krish");
echo "<br>";
?>
<?php
parse_str("name=krish&age=20",$myarr);
print_r($myarr);
echo "<br>";
echo ord("k");
echo "<br>";
$str = "krish boomi";
print_r(explode(" ",$str));
echo "<br>";
$arr = array("krish", "boomi");
echo implode("-",$arr);
echo "<br>";
?>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
echo "<br>";
?>
<?php
$str1 = "Hello World!";

echo ltrim($str1,"Hello");
echo "<br>";
?>
<?php
$str2 = "Hello World!";

echo rtrim($str2,"World!");
echo "<br>";
?>
<?php
$mystr = "krishnaveni Boominathan";
echo wordwrap($mystr,11, "<br>\n");
?>
<br>
<?php
echo substr_count("Krishnaveni Boominathan","i");
echo "<br>";
echo strtoupper("hypertext preprocessor");
echo '<br>';
echo strtolower("HYPERTEXT preprocessor");
echo '<br>';
echo strpos("hello world, hello everyone","hello");
echo '<br>';
echo stripos("ello world, Hello everyone","hello");
echo '<br>';
echo strripos("hello world, hello everyone","hello");
?>