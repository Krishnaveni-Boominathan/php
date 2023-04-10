<?php
include 'database.php';
 session_start();


if(isset($_POST['phone_number'])){
            $phone = $_POST['phone_number'];
            $sql = "SELECT phone_number FROM registration WHERE phone_number= '$phone'";
            $results = mysqli_query($con,$sql);
            if(mysqli_num_rows($results)>0){
                    echo 'exists';
                    exit;
            }else{
                echo 'availabe';
            }
}
?>