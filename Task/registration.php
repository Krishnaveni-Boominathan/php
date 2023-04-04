<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username value'])){
        // removes backslashes
        print_r($_REQUEST);
        $username = stripslashes($_REQUEST['username value']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);
        $country = $_REQUEST['country'];
        // $countrycode = $_REQUEST['countrycode'];
        $type = $_REQUEST['type'];
        $query    = "INSERT into login (user_name,email,password,phone, country, type) VALUES ('$username', '$email', '$password', '$phone', '$country', '$type')";
        $result   = mysqli_query($con, $query);
        if($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login1.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username value" placeholder="Username" required />
        <input type="text" class="login-input" name="email" id="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="phone" placeholder="phone number">
        <input type="text" class="login-input" name="country" placeholder="country code">
        
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">--Select Type--</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login1.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>