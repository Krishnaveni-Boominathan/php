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
// $sql = "INSERT INTO Student_details(Name, Date_of_birth, Total) VALUES ('Krish', '2002-06-27', '481')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
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
// //$sql = "INSERT INTO Student_details(Name, Date_of_birth, Total) VALUES ('Preethi', '2000-11-07', '490')";
// //$sql = "INSERT INTO Student_details(Name, Date_of_birth, Total) VALUES ('Sanju', '2003-01-01', '460')";
// $sql = "INSERT INTO Student_details(Name, Date_of_birth, Total) VALUES ('Saji', '1999-08-27', '495')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $conn->error;
// }

// $conn->close();
?>
<br><br>
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

$sql = "SELECT Name FROM Student_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
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

$sql = "SELECT Name FROM Student_details WHERE Total>=490 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
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

$sql = "SELECT Name FROM Student_details WHERE Name LIKE 's%' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
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

$sql = "SELECT Name FROM Student_details WHERE Name NOT LIKE 's%' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
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

$sql = "SELECT Name FROM Student_details WHERE Name LIKE '%i' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br><br>
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
$result = $conn->query("SELECT COUNT(Total) FROM Student_details");
$row = $result->fetch_row();
echo 'Total: ', $row[0];
$conn->close();
?>
<br><br>
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
$result = $conn->query("SELECT AVG(Total) as avg FROM Student_details");
if($result->num_rows){
    $row = $result->fetch_assoc();
    echo 'Average: '. $row['avg'];
}

$conn->close();
?>
<br><br>
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
$result = $conn->query("SELECT SUM(Total) FROM Student_details");
$row = $result->fetch_row();
echo 'Sum: ', $row[0];
$conn->close();
?>
<br><br>
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

$sql = "SELECT Date_of_birth FROM Student_details WHERE DATE(Date_of_birth) ='2002-06-27' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Date of birth: " . $row["Date_of_birth"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
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

$sql = "SELECT Date_of_birth FROM Student_details WHERE MONTH(Date_of_birth) ='01' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Date of birth: " . $row["Date_of_birth"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
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

$sql = "SELECT Date_of_birth FROM Student_details WHERE DAY(Date_of_birth) ='07' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Date of birth: " . $row["Date_of_birth"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
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

$sql = "SELECT Date_of_birth FROM Student_details WHERE YEAR(Date_of_birth) ='1999' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Date of birth: " . $row["Date_of_birth"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
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

$sql = "SELECT id, Name FROM Student_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $id = serialize($row['id']);
     $name = serialize($row['Name']);
     echo $id . " ". $name . "<br>";
    // echo  " Date of birth: " . $row["Date_of_birth"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
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

$sql = "SELECT Name FROM Student_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $Name = $row['Name'];
    echo  $Name."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
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

$sql = "SELECT id, Name FROM Student_details";
$result = $conn->query($sql);
$data = array();

  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }

print_r($data);
$conn->close();
?>
<br><br>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT id, Name FROM Student_details";
$result = $mysqli -> query($sql);

// Numeric array
$row = $result -> fetch_array(MYSQLI_NUM);
print_r ("%s (%s)\n". $row[0], $row[1]);

// Associative array
$row = $result -> fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["id"], $row["Name"]);

// Free result set
$result -> free_result();

$mysqli -> close();
?>
