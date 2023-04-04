<!DOCTYPE html>
<html>
    <body>       
<?php
echo "numeric strings <br>";
$x = 2714;
var_dump(is_numeric($x));
echo "<br>";
$x = "2714";
var_dump(is_numeric($x));
echo "<br>";
$x = "krish";
var_dump(is_numeric($x));
echo "<br> casting strings and float to int <br>";
$x = 2714.26;
echo (int)$x;
echo "<br>";
$x = "2713.26";
echo (integer)$x;
echo "<h3>math</h3>";
echo "pi() <br>";
echo (pi());
echo "<br> min() and max() <br>";
echo (min(0,1,27,14));
echo "<br>";
echo (max(0,1,27,14));
echo "<br> abs() <br>";
echo (abs(-7));
echo "<br> sqrt() <br>";
echo (sqrt(64));
echo "<br> round() <br>";
echo (round(0.67));
echo "<br> rand() <br>";
echo (rand(10,20));
echo "<h3>Constants</h3>";
echo "constant with a case-sensitive <br>";
define("Greeting", "Welcome");
echo Greeting;
// echo "constant with a case-insensitive <br>";
// define("greeting", "Hello", true);
// echo greeting;
echo "<br> constant Array <br>";
define("cars", ["BMW", "Audi", "Benz"]);
echo cars[0]." ".cars[1]." ".cars[2];
echo "<br> constatnts are global <br>";
define("welcome", "Hello everyone");
function myTest(){
    echo welcome;
}
myTest();
echo "<h3>Conditional statements</h3>";
echo "if statement <br>";
$age = 20;
if($age >= 18){
    echo "eligible to vote";
}
echo "<br> if...else statement <br>";
$age = 10;
if($age >= 18){
    echo "eligible to vote";
}else{
    echo "Not eligible to vote";
}
echo "<br> if...elseif...else statement <br>";
$age = 13;
if($age >= 18){
    echo "eligible to vote";
}elseif($age < 18){
    echo "Not eligible to vote";
}else{
    echo "Invalid";
}
echo "<br> swtich statement <br>";
$favcolor = "blue";
switch ($favcolor){
    case "white":
        echo "My fav color is white";
        break;
    case "blue":
        echo "My fav color is blue";
        break;  
    case "pink":
        echo "My fav color is pink";
        break; 
    default:
        echo "no fav color";
}
echo "<h3>Loop </h3>";
echo "while loop <br>";
$x = 1;
while ($x <=5){
    echo "Number: $x <br>";
    $x++;
}
echo "do...while loop <br>";
$x = 6;
do{
    echo "Number: $x <br>";
    $x++;
}while ($x <=5);
echo "for loop <br>";
for($x=0; $x <= 10; $x++){
    echo "Number: $x <br>";
}
echo "foreach loop <br>";
$color = array("white","blue","pink");
foreach($color as $val){
    echo "$val <br>";
}
$age = array("bhavi"=>"20", "preethi"=>"22");
foreach($age as $x => $value) {
  echo "$x = $value<br>";
}
echo "Break<br>";
for($x=0;$x<10;$x++){
    if($x==4){
        break;
    }
    echo "Number:$x <br>";
}
echo "Continue<br>";
for($x=0;$x<10;$x++){
    if($x==4){
        continue;
    }
    echo "Number:$x <br>";
}
echo "<h3>Array</h3>";
echo "count() <br>";
$car = array("BMW","Audi");
echo count($car);
echo "<br> Indexed array <br>";
$car = array("volvo", "BMW", "Audi");
echo "I like ". $car[1]. " and ".$car[2];
echo "<br> Associative array <br>";
$age = array("bhavi"=>"20", "preethi"=>"22");
echo "Bhavi is " . $age['bhavi'] . " years old.";
echo "<br> Multidimensional array <br>";
$car = array(
    array("BMW",22,15),
    array("Audi",15,13)
);
echo $car[0][0]. " in stock: ".$car[0][1]. " stock: ".$car[0][2]. "<br>";
echo $car[1][0]. " in stock: ".$car[1][1]. " stock: ".$car[1][2];
echo "<h3>Sorting Array</h3>";
echo "sort() <br>";
$cars = array(4, 6, 2, 22, 11);
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo "rsort() <br>";
$cars = array(4, 6, 2, 22, 11);
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo "asort() <br>";
$age = array("bhavi"=>"20", "preethi"=>"22");
asort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "ksort() <br>";
$age = array( "preethi"=>"22", "bhavi"=>"20");
ksort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "arsort() <br>";
$age = array( "preethi"=>"22", "bhavi"=>"20");
arsort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "krsort() <br>";
$age = array( "preethi"=>"22", "bhavi"=>"20");
krsort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<h3>Superglobals</h3>";
echo "GLOBALS <br>";
$x = 75;
$y = 25;
function add(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $z;
echo "<br> _SERVER <br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "REQUEST <br>";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = ($_REQUEST['fname']);
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo $name;
    }
}
echo "<br> POST <br>";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = ($_POST['fname']);
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo $name;
    }
}
//echo "<br> GET <br>"
?>
<!-- <a href="test_get.php?subject=PHP&web=W3schools.com">test GET</a>-->
<?php
// echo "Study ". $_GET['subject'];
echo "<h3>Regular Expression </h3>";
echo "preg_match() <br>";
$str = "krish boomi";
$pattern = "/b/i";
echo preg_match($pattern, $str);
echo "<br> preg_match_all() <br>";
$str = "krish krishnaveni krish";
$pattern = "/kris/i";
echo preg_match_all($pattern, $str);
echo "<br> preg_replace() <br>";
$str = "krish boomi";
$pattern = "/krish/i";
echo preg_replace($pattern,"bhavi", $str);
?> 
<form method="post" action="test_get.php">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
 echo "Today is ".date("Y/m/d")."<br>";
 echo "The time is ".date("h:i:sa")."<br>";
 $d=mktime(4, 30, 54, 12, 9, 2019);
 echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
 $d = strtotime("10.30am April 14 1999");
 echo date("Y-m-d h:i:sa", $d)."<br>";
 $d = strtotime("tomorrow");
 echo date("Y-m-d h:i:sa", $d)."<br>";
 $d = strtotime("+3 Months");
 echo date("Y-m-d h:i:sa", $d);
?>
<br>
 &copy; 2002-<?php echo date("Y");?>
 <h3>Welcome to my home page!</h3>
 <h3>include</h3>
<?php include 'menu.php';
echo "I have a $color $car.";
?>
<?php //require 'noFileExists.php';
//echo "I have a $color $car.";?>
<br>
<br>
<?php
echo "readfile() <br>";
echo readfile("dict.txt");
echo "<br> fopen(), fread(), fclose() <br>";
$myfile = fopen("dict.txt","r") or die("Unable to open file");
echo fread($myfile,filesize("dict.txt"));
fclose($myfile);
echo "<br> fgets() <br>";
$myfile = fopen("dict.txt","r") or die("Unable to open file");
echo fgets($myfile);
fclose($myfile);
echo "<br> fgetc() <br>";
$myfile = fopen("dict.txt","r") or die("Unable to open file");
echo fgetc($myfile);
fclose($myfile);
$myfile = fopen("testfile.txt","w");
echo $myfile;
fclose($myfile);
$myfile = fopen("testfile.txt","w") or die("Unable to open file");
$txt = "krish";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("testfile.txt","w") or die("Unable to open file");
$txt = "Bhavi\n";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("testfile.txt","a") or die("Unable to open file");
$txt = "krish\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>