<?php

$name = htmlspecialchars( $_POST['name']);
$city = htmlspecialchars($_POST['city']);
echo "Dear $name. ";
echo ("Hope you live well in $city.");
?>