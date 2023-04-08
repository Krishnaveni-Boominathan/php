<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists in database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$response = array('status' => 'error', 'message' => 'Email already exists');
	echo json_encode($response);
	exit;
}

// Insert user data into database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
	// Generate login link
	$login_link = 'login.php';

	// Send response
	$response = array('status' => 'success', 'login_link' => $login_link, 'name' => $name, 'email' => $email);
	echo json_encode($response);
} else {
	$response = array('status' => 'error', 'message' => 'Error inserting data into database');
	echo json_encode($response);
}

$conn->close();
?>
