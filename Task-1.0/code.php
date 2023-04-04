<?php
    session_start();
    $con = mysqli_connect("localhost","root","password","appointment");
    if(!isset($_POST["save_select"])) {
        
        exit();
    }
?>