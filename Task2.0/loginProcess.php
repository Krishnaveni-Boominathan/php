<?php
extract($_POST);
include 'database.php';
session_start();
if(isset($_POST['save']))
{
    
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM user where Name='$name' and Password='$pass'";
    $sql=mysqli_query($con,$query);
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
             
        $_SESSION["Name"]=$row['Name'];
        $_SESSION["Password"] = $row['Password']; 
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>