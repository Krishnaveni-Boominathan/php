<?php 
 
 include 'database.php';
 session_start();

 
 if(isset($_POST['fname']) && isset($_POST['lname']) &&
 isset($_POST['uname']) && isset($_POST['email']) &&
 isset($_POST['password']) && isset($_POST['number']) &&
 isset($_POST['age'])  && isset($_POST['type']) ){

  

        $firstname = $_POST['fname'];
       
        $lastname = $_POST['lname'];
        
        $username = $_POST['uname'];
       
        $password = $_POST['password'];
       
        $email    = $_POST['email'];

        $age = $_POST['age'];
           
        $type = $_POST['type'];

        $phone = $_POST['number'];
        if(isset($_POST['number'])){
            $phone = $_POST['number'];
            $sql = "SELECT * FROM registration WHERE phone_number= '$phone'";
            $results = mysqli_query($con,$sql);
            if(mysqli_num_rows($results)>0){
                    echo 'exists';
                   // exit;
            // }else if(isset($_POST['age']) < 18){
            //     $phonenumber = $_POST['phonenumber'];
            //     $stmt    = "INSERT into registration (first_name,last_name,user_name,password,email,phone_number,age, type,number) 
            //                   VALUES ('$firstname',' $lastname','$username',  '$password','$email', '$phone', '$age', '$type','$phonenumber')";
            //     $output   = mysqli_query($con, );
            //     if($output){
            //         echo "registered";
            //     }else{
            //         echo "not registered";
            //     }
            }   else{
                    $query    = "INSERT into registration (first_name,last_name,user_name,password,email,phone_number,age, type) 
                                    VALUES ('$firstname',' $lastname','$username',  '$password','$email', '$phone', '$age', '$type')";
                    $result   = mysqli_query($con, $query);
                    
                        //echo "new data";
                    
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
        }
       
    } 
    $con->close();
    // if($_POST['check'] == '1'){

    // }
    // else{
    //     echo "select agree the terms and condition"
    // }


?>