<?php
  namespace Html;
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
    echo preg_replace($pattern, "bhavi", $str);
    echo "<br>";
    $str = "936.098.91.93";
    $pattern = preg_split("/\./", $str);
    echo "$pattern[0] <br>";
    echo "$pattern[1] <br>";
    echo "$pattern[2] <br>";
    echo "$pattern[3] <br>";
    echo "<br>";
    $str = "Apple and banana";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str);
    echo "<br>";
    $pattern = '{\d+}';
    $message = 'PHP 8 was released on November 26, 2020';

    if (preg_match($pattern, $message)) {
        echo "match";
    } else {
        echo "not match";
    }
?>
<?php
    echo "<br>";
    echo "Cookies<br>";
    $cookie_name = "user";
    $cookie_value = "Krishnaveni";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<?php
    echo " modify Cookies<br>";
    
    $cookie_name = "user";
    $cookie_value = "Bhavi";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<?php
    echo " delete Cookies<br>";

    $cookie_name = "user";
    $cookie_value = "Krishnaveni";
    setcookie("user", "", time() + (3600));
?>
<?php
setcookie("result","krish");
?>
<?php
session_start();
?>
<?php  

  
   if (!isset($_SESSION['counter'])) {  
      $_SESSION['counter'] = 1;  
   } else {  
      $_SESSION['counter']++;  
   }  
   echo ("Page Views: ".$_SESSION['counter']);  
   echo "<br>";
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>document</title>
</head>
<body>

<?php
    if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie named ". $cookie_name. " is not set";
            echo "<br>";
            echo "<br>cookie is deleted";
            echo "<br>";
        } else {
            echo "Cookie ". $cookie_name. " is set<br>";
            echo "Value is ".$_COOKIE[$cookie_name];
        }
?>
<br>
<?php
    if(!isset($_COOKIE["result"])){
        echo "not set";
    }else{
        echo "value ".$_COOKIE["result"];
    }

?>
<?php
    $_SESSION["favcolor"] = "blue";
    $_SESSION["favcar"] = "BMW";
    echo "<br>Session variables are set";

?>
<?php
    echo "<br> Session <br>";
    echo "Favorite color is ". $_SESSION["favcolor"]. "<br>";
    echo "Favorite car is ". $_SESSION["favcar"];
    echo "<br> another way to show session<br>";
    print_r($_SESSION);
    echo "<br> modify session<br>";
    $_SESSION["favcolor"] = "white";
    print_r($_SESSION);
    session_unset();
    session_destroy();
    echo "<br> destroy session<br>";
    print_r($_SESSION);
?>
<br>
<?php
echo "Class<br>";
class Fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}
 $apple = new Fruit();
 $mango = new Fruit();
 $orange = new Fruit();
 $orange->name="Orange";
 $apple->set_name('Apple');
 $apple->set_color('Red');
 $mango->set_name('Mango');
 $mango->set_color('Green');
 echo $apple->get_name(). " and it's color is ".$apple->get_color();
 echo "<br>";
 echo $mango->get_name(). " and it's color is ".$mango->get_color();
 echo "<br>";
 echo $orange->name;
 echo "<br> <br>instanceof <br>";
 var_dump($apple instanceof Fruit);
 echo "<br><br> Constructor example <br>";
 class Car{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color=  $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }  
 }
 $bmw = new Car("BMW", "White");
 echo $bmw->get_name();
 echo "<br>";
 echo $bmw->get_color();
 echo "<br><br> Destructor example <br>";
 class Vehicle{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color=  $color;
    }
    function __destruct(){
        echo "<br> The vehicle is {$this->name} and the color is {$this->color}" ;
    }

 }
 $car = new Vehicle("Car", "White");
 echo "<br> <br> Access Modifiers <br>";
 class Demo{
    public $name;
    protected $color;
    private $weight;
    function get_name(){
        return $this->name;
    }
 }
 $mango = new Demo();
 $mango->name = "Mango";
 echo $mango->get_name();
 //$mango->color = "Green";
 //$mango->weight = '300';
 echo "<br> static method<br>";
 class greeting{
    public static function welcome(){
        echo "Hello Krish";
    }
 }
 greeting::welcome();
 echo "<br>";
 class Hello{
    public static function greeting(){
        echo "Welcome";
    }
    public function __construct(){
        self::greeting();
    }
 }
 new Hello();
 echo "<br>";
 class A{
    public static function text(){
        echo "Hello world";
    }
 }
 class B{
    public function message(){
        A::text();
    }
 }
 $obj = new B();
 echo $obj->message();
 echo "<br>";
 class domain {
    protected static function getWebsiteName() {
      return "W3Schools.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;
  echo "<br> static property<br>";
  class pi{
    public static $value = 3.141;
  }
  echo pi::$value;
  echo "<br>";
  class value{
    public static $range=9.360;
    public function staticValue(){
        return self::$range;
    }
  }
  $value = new value();
  echo $value->staticValue();
  echo "<br>";
  class domain1 {
    public static $pi = 3.1415;
  }
  
  class domainW3s extends domain1 {
    public function xStatic(){
        return parent::$pi;
    }
  }
  echo domainW3s::$pi;
  echo "<br>";
  $domainW3s = new domainW3s;
  echo $domainW3s -> xStatic();
  echo "<br> Namespace <br>";
  class Table{
    public $title="";
    public $numRows=0;
    public function message(){
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
  }
  class Row {
    public $numCells = 0;
    public function message() {
      echo "<p>The row has {$this->numCells} cells.</p>";
    }
  }
  use Html\Table as T;
  $table = new T();
  $table->title = "My tabel";
  $table->numRows = 3;
  $row = new Row();
  $row->numCells = 5;
 ?>
 <?php
 $table->message();
 $row->message();
 ?>
</body>
</html>