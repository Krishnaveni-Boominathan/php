<?php
extract($_POST);
include("database.php");
session_start();
// if(isset($_POST['save']))
if($_POST['at']==1)
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $type = $_POST['type'];
        $query="INSERT INTO user(Name, Email, Password, Phone, Countrycode, Type ) 
                VALUES ('$name', '$email', '$pass', '$phone', '$country', '$type')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
        // header ("Location: login.php?status=success");
    }
    else 
    {
		echo "Error.Please try again";
	}


?>
<?php
// include ('database.php');
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $phone = $_POST['phone'];
//     $country = $_POST['country'];
//     $type = $_POST['type'];
// if ((isset($name) && !empty($name)) && (isset($email) && !empty($email)) && (isset($pass) && !empty($pass)) && (isset($phone) && !empty($phone))&& (isset($country) && !empty($country))&& (isset($type) && !empty($type))) {
//     $query="INSERT INTO user(Name, Email, Password, Phone, Countrycode, Type ) 
//                 VALUES ('$name', '$email', '$pass', '$phone', '$country', '$type')";
//     $result = mysqli_query($con,$query);
//     if (!$result) {
//         $errormessage = mysqli_connect_error();
//         echo "Error with query: " . $errormessage;
//     } else {
//         echo "User Registration Successfull!!!";
//     }
// } else {
//     echo "Invalid input. Please enter all the input fields in form";
// }
?>
<?php
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $phone = $_POST['phone'];
//     $country = $_POST['country'];
 
// echo "Name". $name . "<br>";
// echo "email". $email. "<br>";
// echo "phone". $phone. "<br>";

?>