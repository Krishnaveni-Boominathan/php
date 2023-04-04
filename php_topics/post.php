<?php
if(empty($_POST['name']) && empty($_POST['email'])){
    echo "Please fill in the fields";
}else{
    $name = $_POST['name'];
    $password = $_POST['password'];
    echo "Welcome $name <br>";
    echo "Your password is $password";
}
?>