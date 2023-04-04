<h3>Select</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_id FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " ID: " . $row["product_id"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>

<?php
//$servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myTest';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO products(product_id, product_name, price) VALUES ('345', 'ami', '48')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br>
<h3>Select(>)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price > 50 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<h3>Select(between)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price BETWEEN 20 AND 50 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<h3>Select(like)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price LIKE '14' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<h3>Select(in)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price IN ('14', '24', '22') ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<h3>Select(and)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price= '22' AND product_id=3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<h3>Select(or)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price= '27' OR product_id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<h3>Select(not)where</h3>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myTest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE NOT price='24'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "ID:" . $row["product_id"]." " ."Name:" . $row["product_name"]. " "."Price:". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>




