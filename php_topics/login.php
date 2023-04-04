<?php
if (isset($_GET['uname']) && isset($_GET['password'])) {
    

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_GET['uname']);

    $password = validate($_GET['password']);


    if (empty($uname) || empty($password)) {

        
        header("Location:demo13.php?error=Fill the required fields");

        exit();

    }else{
        echo "Username: $uname";
        echo "<br>";
        echo "Password: $password";
    }
}
?>