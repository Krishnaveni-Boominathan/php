<?php 
 
 include 'database.php';
 session_start();

 
 if( isset($_POST['address']) ){
        
        $address = $_POST['address'];      
        
        $query    = "INSERT into patient (address) 
                        VALUES ('$address')";
                    $result   = mysqli_query($con, $query);
                    
                    
                    
                    if($result){
                            
                            echo "You are registered successfully";
                           
                } else {
                    echo "not registered";
                          
                }
            }
 
    $con->close();


?>