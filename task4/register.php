<?php
    // session_start();
    // $_SESSION['fname'] = $_POST['fname'];
    // $_SESSION['lname'] = $_POST['lname'];
    // $_SESSION['uname'] = $_POST['uname'];
    // $_SESSION['password'] = $_POST['password'];
    // $_SESSION['email'] = $_POST['email'];
    // $_SESSION['number'] = $_POST['number'];
    // $_SESSION['dob'] = $_POST['dob'];
    // $_SESSION['age'] = $_POST['age'];
    // $_SESSION['gender'] = $_POST['gender'];
    // $_SESSION['drive'] = $_POST['drive'];
    // $_SESSION['licensenumber'] = $_POST['licensenumber'];
    // $_SESSION['college'] = $_POST['college'];
    // $_SESSION['degree'] = $_POST['degree'];
    // $_SESSION['address'] = $_POST['address'];
    // $_SESSION['state'] = $_POST['state'];
    // $_SESSION['country'] = $_POST['country'];
    // $_SESSION['code'] = $_POST['code'];
  
 
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
       
        if(isset($_POST['number'])){
            $phone = $_POST['number'];
            $sql = "SELECT phone_number FROM registration WHERE phone_number= '$number'";
            $results = mysqli_query($con,$sql);
            if(mysqli_num_rows($results)>0){
           echo 'exists';
        }else{
           echo 'available';
        }
        }
        
    
        $age = $_POST['age'];
           
        $type = $_POST['type'];
        $query    = "INSERT into registration (first_name,last_name,user_name,password,email,phone_number,age, type) 
                    VALUES ('$firstname',' $lastname','$username',  '$password','$email', '$phone', '$age', '$type')";
        $result   = mysqli_query($con, $query);
       
        echo "new data";
    
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
    // if($_POST['check'] == '1'){

    // }
    // else{
    //     echo "select agree the terms and condition"
    // }


?>