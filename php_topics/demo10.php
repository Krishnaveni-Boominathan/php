<?php
echo "if statement <br>";
$num = 20;
if($num < 50){
    echo "$num is less than 50";
}
echo "<br> if...else statement <br>";
$num = 10;
if($num%2 == 0){
    echo "$num is even";
}else{
    echo "$num is odd";
}
echo "<br> if...elseif...else statement <br>";
$marks = 65;
if($marks < 35){
    echo "fail";
}elseif($marks >=36 && $marks<50){
    echo "D gradae";
}elseif($marks >=50 && $marks<65){
        echo "C gradae";}
else{
    echo "Invalid";
}
echo "<br> nested if statement <br>";
$age = 23;  
$nationality = "Indian";  
if ($nationality == "Indian")  
{  
    if ($age >= 18) {  
        echo "Eligible to give vote";  
    }  
    else {    
        echo "Not eligible to give vote";  
    }  
}  
echo "<br> swtich statement <br>";
$num=20;      
switch($num){      
case 10:      
echo("number is equals to 10");      
break;      
case 20:      
echo("number is equal to 20");      
break;      
case 30:      
echo("number is equal to 30");      
break;      
default:      
echo("number is not equal to 10, 20 or 30");      
} 
echo "<h3>Loop </h3>";
echo "while loop <br>";
$x = 'D';
while ($x <= 'K'){
    echo "$x <br>";
    $x++;
}
echo "do...while loop <br>";
$x = 6;
do{
    echo "Number: $x <br>";
    $x++;
}while ($x <=5);
echo "for loop <br>";
for($x=3; $x <= 10; $x++){
    echo "Number: $x <br>";
}
echo "foreach loop <br>";
$color = array("white","blue","pink");
foreach($color as $val){
    echo "$val <br>";
}
$marks = array("bhavi"=>"20", "preethi"=>"22");
foreach($marks as $x => $value) {
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
$arr = array("BMW","audi");
print_r($arr);
echo "<br>count() <br>";
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
echo "array_change_key_case() <br>";
$arr = array("krish","preethi");
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<br> array_count_values() <br>";
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
echo "<br>array_pop() <br>";
$a=array("red","black","blue");
array_pop($a);
print_r($a);
echo "<br>array_push() <br>";
$a=array("red","black");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>array_rand() <br>";
$a=array("red","black","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
echo "<br>array_replace() <br>";
$a1=array("red","black");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
echo "<br>";
$a1=array("a"=>"red","b"=>"black");
$a2=array("a"=>"pink","white");
print_r(array_replace($a1,$a2));
echo "<br>";
$a1=array("a"=>"red","black");
$a2=array("a"=>"pink","b"=>"white");
print_r(array_replace($a1,$a2));
echo "<br>";
$a1=array("red","black");
$a2=array("blue","yellow");
$a3=array("pink","white");
print_r(array_replace($a1,$a2,$a3));
echo "<br>";
$a1=array("red","black","blue","yellow");
$a2=array(0=>"pink",3=>"white");
print_r(array_replace($a1,$a2));
echo "<br>array_reverse() <br>";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
echo "<br>array_search() <br>";
$a=array("a"=>"white","b"=>"black","c"=>"blue");
print_r(array_search("blue",$a));
echo "<br>array_shift() <br>";
$a=array("a"=>"red","b"=>"black","c"=>"blue");
print_r(array_shift($a));
echo "<br>array_slice() <br>";
$a=array("red","black","blue","white","pink");
print_r(array_slice($a,2));
echo "<br>array_splice() <br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"white");
array_splice($a1,0,2,$a2);
print_r($a1);
echo "<br>array_unshift() <br>";
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
echo "<br>array_unique() <br>";
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
echo "<br>array_list() <br>";
$my_array = array("Dog","Cat","Horse");
list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";
echo "<br>";
$my_array = array("Dog","Cat","Horse");
list($a, , $c) = $my_array;
echo "Here I only use the $a and $c variables.";
echo "<br>range() <br>";
$number = range(0,5);
print_r ($number);
echo "<br>";
$number = range(0,50,10);
print_r ($number);
echo "<br>";
$letter = range("a","d");
print_r ($letter);
// echo "Study ". $_GET['subject'];

?> 
