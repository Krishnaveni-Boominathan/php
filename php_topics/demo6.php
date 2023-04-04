<h3>MySQLi procedural</h3>
<h4>created db, table already so comment the code to avoid errors</h4>
<br>
<p>MySQLi procedural(connect)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(create db)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// $conn = mysqli_connect($servername, $username, $password);

// if(!$conn){
//     die("Connection failed: ". mysqli_connect_error());
// }

// $sql = "CREATE DATABASE myTest";
// if(mysqli_query($conn, $sql)){
//     echo "Database created successfully";
// }else{
//     echo "Error creating database: ". mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(create table)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myTest";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){
//     die("Connection failed: ". mysqli_connect_error());
// }

// $sql = "CREATE TABLE Details (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                 firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, 
//                 email VARCHAR(50))";
// if(mysqli_query($conn, $sql)){
//     echo "Table created successfully";
// }else{
//     echo "Error creating table: ". mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(Insert data)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myTest";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){
//     die("Connection failed: ". mysqli_connect_error());
// }

// $sql = "INSERT INTO Details(firstname, lastname, email) VALUES ('Krish', 'B', 'krish@gmail.com')";
// if(mysqli_query($conn, $sql)){
//     echo "New record created successfully";
// }else{
//     echo "Error creating record: ". mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(get last Inserted id)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myTest";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){
//     die("Connection failed: ". mysqli_connect_error());
// }

// $sql = "INSERT INTO Details(firstname, lastname, email) VALUES ('Bhavi', 'B', 'bhavi@gmail.com')";
// if(mysqli_query($conn, $sql)){
//     $last_id = mysqli_insert_id($conn);
//     echo "New record created successfully. Last inserted Id is: ". $last_id;
// }else{
//     echo "Error : ". mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(Insert multiple data)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myTest";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){
//     die("Connection failed: ". mysqli_connect_error());
// }

// $sql = "INSERT INTO Details(firstname, lastname, email) VALUES ('Preethi', 'B', 'preethi@gmail.com');";
// $sql = "INSERT INTO Details(firstname, lastname, email) VALUES ('Sanju', 'S', 'sanju@gmail.com')";
// if(mysqli_multi_query($conn, $sql)){
//     echo "New records created successfully";
// }else{
//     echo "Error creating record: ". mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(select data)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM Details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(where clause)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM Details WHERE lastname='B' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(order by)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM Details ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(delete)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myTest";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // sql to delete a record
// $sql = "DELETE FROM Details WHERE id=3";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
<br><br>
<p>MySQLi procedural(update data)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myTest";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "UPDATE Details SET lastname='Boomi' WHERE id=2";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>