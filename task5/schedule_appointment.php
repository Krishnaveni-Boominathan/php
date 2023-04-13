<?php 
 
 include 'database.php';
 session_start();

 
 if( isset($_POST['name']) && isset($_POST['date']) &&
 isset($_POST['time']) && isset($_POST['reason'])){
        
        $name = $_POST['name'];
       

       
        $date    = $_POST['date'];

           
        $reason = $_POST['reason'];
   
        $time = $_POST['time'];
        $query    = "INSERT into appointment (patient_name,date,time, reason) 
                        VALUES ('$name', '$date', '$time', '$reason')";
                    $result   = mysqli_query($con, $query);
                    
                    
                    
                    if($result){
                            
                            echo "You are registered successfully";
                          
                } else {
                    echo "failed";
                }
            }
 
    $con->close();


?>