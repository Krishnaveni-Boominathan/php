<html>
<head>
    <title>Mail sending</title>
</head>
<body>
<?php
$to = "krish@gmail.com";
$subject = "HTML email";

$message = "This is html message";
$message = "message";
$header = 'From: bhavi@gmail.com \r\n';
$header .= 'Cc:pree@gmail.com '."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
$retval = mail($to, $subject,$message,$header);
if($retval == true){
    echo "Message sent";
}else{
    echo "Message could not sent";
}
echo '<br><br>';
?>
<?php date_default_timezone_set('America/Los_Angeles');
$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
} echo '<br><br>';
$date = new DateTime("2023-03-13 16:43:21", new DateTimeZone('Europe/Paris'));
date_default_timezone_set('America/New_York');
echo date("Y-m-d h:iA", $date->format('U'));
echo "<br><br>";
?>

<?php
$servername = "localhost";
$username = " ";
$password = " ";

$conn = new mysqli($servername, $username,$password);

if($conn->connect_error){
    die("Connetion failed: ". $conn->connect_error);
}
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE){
    echo "Database Created successfully";
}else{
    echo "Error creating database: ". $conn->error;
}


$conn->close();
?>
</body>
</html>