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
echo "<br> <br> Inheritance <br>";
echo "public  <br><br>";
 class Inheri{
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color; 
      }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
 }
 class Strawberry extends Inheri{
    public function message(){
        echo "Am I a fruit or a berry?";
    }
 }
 $strawberry = new Strawberry("Strawberry", "red");
 $strawberry->message();
 echo "<br>";
 $strawberry->intro();
 echo "<br><br>protected  <br>";
 class Inheri1{
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color; 
      }
    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
 }
 class Strawberry1 extends Inheri1{
    public function message(){
        echo "Am I a fruit or a berry? <br>";
        $this->intro(); // call protected method from within derived class
    }
 }
 $strawberry = new Strawberry1("Strawberry", "red");
 $strawberry->message();
 echo "<br><br>";
 echo "overriding inheritance method<br>";
 class Inheriov{
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color; 
      }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
 }
 class Strawberry2 extends Inheriov{
    public $weight;
    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color; 
        $this->weight=$weight;
    }
    public function intro(){
        echo "The fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight}";
    }
 }
 $strawberry = new Strawberry2("Strawberry", "red",50);
 $strawberry->intro();
 echo "<br><br> Class Constant <br>";
 class Good{
    const Message = "Welcome All";
 }
 echo Good::Message;
 echo "<br>";
 class Goodbye {
    const LEAVING_MESSAGE = "Thank you ";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();
 ?>