<?php
include 'database.php';

$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$city = test_input($_POST['city']);
$country = test_input($_POST['country']);

if (!empty($name) && !empty($email) && !empty($city) && !empty($country)) {
    $sql = "INSERT INTO usertable(name,email,city,country)
            VALUES('$name','$email','$city','$country')";
    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        echo "User data inserted successfully";
    } else {
        echo "User data not inserted";
    }

} else {
    echo "All fields are required";
}

function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}


?>