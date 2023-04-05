<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();
?>
<br><br>
<p>create db</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDEMO";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
<br><br>
 <p>create table</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = 'myDEMO';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql = "CREATE TABLE DEMO (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, 
        email VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
<br><br>
<p>insert data into table</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDEMO';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO DEMO(firstname, lastname, email) VALUES ('Krish', 'B', 'krish@gmail.com')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>get last inserted id from table</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDEMO';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO DEMO(firstname, lastname, email) VALUES ('Bhavi', 'B', 'bhavi@gmail.com')";
// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//   echo "New record created successfully. Last inserted Id is: ".$last_id;
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>insert multiple data into table</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDEMO';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO DEMO(firstname, lastname, email) VALUES ('Preethi', 'B', 'preethi@gmail.com');";
// $sql = "INSERT INTO DEMO(firstname, lastname, email) VALUES ('Sanju', 'S', 'sanju@gmail.com')";


// if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>prepared statements</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDEMO';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = $conn->prepare("INSERT INTO DEMO(firstname, lastname, email) VALUES (?,?,?)");
// $sql->bind_param("sss",$firstname, $lastname, $email);

// $firstname = "preethi";
// $lastname = "B";
// $email = "preethi@gmail.com";
// $sql->execute();

// $firstname = "saji";
// $lastname = "S";
// $email = "saji@gmail.com";
// $sql->execute();

// echo "New record created successfully";
// $sql->close();
// $conn->close();
?>
<br><br>
<p>select data</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM DEMO";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>where clause</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM DEMO WHERE lastname='B' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>order by clause</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM DEMO ORDER BY lastname ASC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>delete data</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM DEMO where id=8";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
<br><br>
<p>update data</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE DEMO SET lastname= 'Boomi' where id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
<br><br>
<p>limit</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM DEMO LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>limit and offset</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM DEMO LIMIT 3 OFFSEt 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>where clause</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDEMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM DEMO WHERE lastname='B' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

