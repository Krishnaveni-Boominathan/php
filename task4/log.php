<?php
    session_start();
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['uname'] = $_POST['uname'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['age'] = $_POST['age'];
   
   
?>