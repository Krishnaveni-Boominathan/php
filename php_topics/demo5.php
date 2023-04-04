<h3>MySQLi object-oriented</h3>
<h4>created db, table already so comment the code to avoid errors</h4>
<br>
<?php
$mysqli = new mysqli('localhost', 'root', 'password', 'test');
if($mysqli->connect_error){
    die('Error');
}else{
    echo 'database connected';
}
?>
<br><br>
<p>MySQLi object-oriented(connect)</p>
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
<p>MySQLi object-oriented(create db)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(create table)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDB';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "CREATE TABLE Student (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL, lasttname VARCHAR(30) NOT NULL, 
//         email VARCHAR(50))";
// if ($conn->query($sql) === TRUE) {
//   echo "Table created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(insert data into table)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDB';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO Student(firstname, lasttname, email) VALUES ('Krish', 'B', 'krish@gmail.com')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(get last inserted id from table)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDB';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO Student(firstname, lasttname, email) VALUES ('Bhavi', 'B', 'bhavi@gmail.com')";
// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//   echo "New record created successfully. Last inserted Id is: ".$last_id;
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(insert multiple data into table)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = 'myDB';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create table
// $sql = "INSERT INTO Student(firstname, lasttname, email) VALUES ('Krish', 'B', 'krish@gmail.com');";
// $sql = "INSERT INTO Student(firstname, lasttname, email) VALUES ('Preethi', 'B', 'preethi@gmail.com');";
// $sql = "INSERT INTO Student(firstname, lasttname, email) VALUES ('Sanju', 'S', 'sanju@gmail.com')";


// if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(prepared statements)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = 'myDB';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql = $conn->prepare("INSERT INTO Student(firstname, lasttname, email) VALUES (?,?,?)");
$sql->bind_param("sss",$firstname, $lasttname, $email);

$firstname = "hardin";
$lasttname = "scott";
$email = "hardin@gmail.com";
$sql->execute();

$firstname = "edward";
$lasttname = "cullen";
$email = "edward@gmail.com";
$sql->execute();

echo "New record created successfully";
$sql->close();
$conn->close();
?>
<br><br>
<p>MySQLi object-oriented(select data)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lasttname FROM Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lasttname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>MySQLi object-oriented(where clause)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lasttname FROM Student WHERE lasttname='B' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lasttname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>MySQLi object-oriented(order by clause)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lasttname FROM Student ORDER BY lasttname ASC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lasttname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>MySQLi object-oriented(delete data)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "DELETE FROM Student where id=6";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// }
// else {
//   echo "Error deleting record: " . $conn->error;
// }
// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(update data)</p>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "UPDATE Student SET lasttname= 'Boomi' where id=1";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// }
// else {
//   echo "Error deleting record: " . $conn->error;
// }
// $conn->close();
?>
<br><br>
<p>MySQLi object-oriented(limit)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lasttname FROM Student LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lasttname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>MySQLi object-oriented(limit and offset)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lasttname FROM Student LIMIT 3 OFFSEt 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lasttname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
<p>MySQLi object-oriented(where clause)</p>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lasttname FROM Student WHERE lasttname='B' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lasttname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


