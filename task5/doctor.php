<?php 
 
 include 'database.php';
 session_start();

 
 if( isset($_POST['fee']) && isset($_POST['country']) &&
 isset($_POST['city']) && isset($_POST['state']) && isset( $_POST['pincode'])){
        
        $fee = $_POST['fee'];      
        $country    = $_POST['country'];

           
        $pincode = $_POST['pincode'];
    $city = $_POST['city'];
        $state = $_POST['state'];
        $query    = "INSERT into doctor (fees,country,city,state, pincode) 
                        VALUES ('$fee', '$country', '$city','$state', '$pincode')";
                    $result   = mysqli_query($con, $query);
                    
                    
                    
                    if($result){
                            
                            echo "You are registered successfully";
                           
                } else {
                    echo "not registered";
                          
                }
            }
 
    $con->close();


?>