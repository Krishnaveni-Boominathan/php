<?php
include 'database.php';
 session_start();


if(!empty($_POST['number'])){
           // $phone = $_POST['number'];
            $sql = "SELECT * FROM registration WHERE phone_number='". $_POST["number"]."'";
            $results = mysqli_query($con,$sql);
            if(mysqli_num_rows($results)>0){
                    echo 'Phone number already exists';
                    
                    //exit;
            }else{
                echo 'Phone number available';
               //
            }
}
?>