<?php
echo "Cookies<br>";
echo "<br>";
$cookie_name = "user";
$cookie_value = "Krishnaveni";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<?php
echo " modify Cookies<br>";
echo "<br>";
$cookie_name = "user";
$cookie_value = "Bhavi";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<?php
echo " delete Cookies<br>";
echo "<br>";
$cookie_name = "user";
$cookie_value = "Krishnaveni";
setcookie("user", "", time() + (3600));
?>
<?php
session_start();
?>
<html>
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
        <?php
        $_SESSION["favcolor"] = "blue";
        $_SESSION["favcar"] = "BMW";
        echo "<br>Session variables are set";
        echo "<br>";
        ?>
        <?php
        echo "<br> Session <br>";
        echo "<br>";
        echo "Favorite color is ". $_SESSION["favcolor"]. "<br>";
        echo "Favorite car is ". $_SESSION["favcar"];
        echo "<br> another to show session<br>";
        echo "<br>";
        print_r($_SESSION);
        echo "<br> modify session<br>";
        echo "<br>";
        $_SESSION["favcolor"] = "white";
        print_r($_SESSION);
        session_unset();
        session_destroy();
        echo "<br> destroy session<br>";
        echo "<br>";
        print_r($_SESSION);
        echo "<br> Filter <br>";
        echo "<br>";
        foreach(filter_list() as $id => $filter) {
            echo $filter. " - ".filter_id($filter)."<br>";
        }
        echo "Callback <br>";
        echo "<br>";
        function my_callback($item){
            return strlen($item);
        }
        $strings = ["apple", "mango", "orange"];
        $lengths = array_map("my_callback", $strings);
        print_r($lengths);
        echo "<br>";
        echo "<br> anonymous function as callback functions <br>";
        echo "<br>";
        $strings = ["apple", "mango", "orange"];
        $lengths = array_map(function($item) {return strlen($item);}, $strings);
        print_r($lengths);
        echo "<br> callbacks in user defined functions <br>";
        echo "<br>";
        function exclaim($str){
            return $str. "! ";
        }
        function ask($str){
            return $str. "? ";
        }
        function printFormat($str, $format){
            echo $format($str);
        }
        printFormat("Hello World", "exclaim");
        echo "<br>";
        echo "<br>";
        printFormat("Hello World", "ask");
        echo "<br>";
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj));
        echo "<br> JSON";
        echo "<br>";
        echo "<br> json_encode() associative array into a JSON object <br>";
        echo "<br>";
        $age = array("bhavi"=>20, "preethi"=>22);
        echo json_encode($age);
        echo "<br> json_encode() indexed array into a JSON array <br>";
        echo "<br>";
        $age = array("bmw","audi");
        echo json_encode($age);
        echo "<br> json_decode() JSON data into a PHP object <br>";
        echo "<br>";
        $age = '{"bhavi":20, "preethi":22}';
        var_dump(json_decode($age));
        echo "<br> json_decode() JSON data into a PHP associative array <br>";
        echo "<br>";
        $age = '{"bhavi":20, "preethi":22}';
        var_dump(json_decode($age, true));
        echo "<br> accessing json_decode() values from PHP object <br>";
        echo "<br>";
        $age = '{"bhavi":  20, "preethi":22}';
        $obj = json_decode($age);
        echo $obj->bhavi;
        echo "<br>";
        echo $obj->preethi;
        echo "<br> accessing json_decode() values from PHP associative array <br>";
        echo "<br>";
        $age = '{"bhavi":20, "preethi":22}';
        $obj = json_decode($age, true);
        echo $obj["bhavi"];
        echo "<br>";
        echo $obj["preethi"];
        ?>
    </body>
</html>