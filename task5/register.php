<?php 
 
 include 'database.php';
 session_start();

 
 if( isset($_POST['name']) && isset($_POST['email']) &&
 isset($_POST['number']) && isset($_POST['type']) && isset( $_POST['code'])){
        
        $name = $_POST['name'];
       

       
        $email    = $_POST['email'];

           
        $type = $_POST['type'];
    $code = $_POST['code'];
        $phone = $_POST['number'];
        $query    = "INSERT into register (name,email,code,phone_number, type) 
                        VALUES ('$name', '$email', '$code','$phone', '$type')";
                    $result   = mysqli_query($con, $query);
                    
                    
                    
                    if($result){
                            
                            echo "<div class='form'>
                            <h3>You are registered successfully.</h3><br/>
                            <p class='link'>Click here to <a href='login.php'>Login</a></p>
                            </div>";
                } else {
                    echo "<div class='form'>
                            <h3>Required fields are missing.</h3><br/>
                            <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                            </div>";
                }
            }
 
    $con->close();


?>