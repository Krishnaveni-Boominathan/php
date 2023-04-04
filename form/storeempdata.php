<?php
$name = $_POST['emp_name'];
$email = $_POST['email'];
$phn = $_POST['phone'];
$uname = $_POST['username'];
$password = $_POST['password'];
echo "Name". $name . "<br>";
echo "email". $email. "<br>";
echo "phone". $phn. "<br>";
echo "username". $uname. "<br>";
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDB';
// // Establishing Connection with Server..
// $conn = new mysqli($servername, $username, $password, $dbname);

// //Check for connection error
// if($conn->connect_error){
//   die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
// }
// // Selecting Database
// //$db = mysql_select_db("myDB", $connection); // Selecting Database

// if (isset($_POST['emp_name'])) {

// //Insert Query
// $insert= "insert into employee1(emp_id, emp_name , email, phone, username, password) 
// values ('','$name', '$email', '$phn','$uname', '$password')"; 
// }
// if($conn->query($insert)){
//  echo 'Data inserted successfully';
// }
// else{
//  echo 'Error '.$conn->error;  
// }

// $conn->close(); // Connection Closed
?>    