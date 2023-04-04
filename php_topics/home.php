<?php
$user = 'root';
$pass = '';
$db = 'data1';

$db = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');
echo "Great work";
?>