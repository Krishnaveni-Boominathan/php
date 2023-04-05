<?php
    session_start();
   
    if(isset($_SESSION['fname']) && isset($_SESSION['lname']) &&
    isset($_SESSION['uname']) && isset($_SESSION['email']) &&
    isset($_SESSION['password']) && isset($_SESSION['number']) &&
    isset($_SESSION['dob'])  && isset($_SESSION['address']) 
    && isset($_SESSION['gender']) && isset($_SESSION['drive'])
    && isset($_SESSION['state']) && isset($_SESSION['country']) && isset($_SESSION['code']))  {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $uname= $_SESSION['uname'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
    $number = $_SESSION['number'];
    $drive = $_SESSION['drive'] ;
    $dob = $_SESSION['dob'];
    $gender = $_SESSION['gender'];
    $college = $_SESSION['college'];
    $degree = $_SESSION['degree'];
    $address = $_SESSION['address'];
    $state = $_SESSION['state'];
    $country = $_SESSION['country'];
    $code = $_SESSION['code'];
   
    } 
    if(isset($_SESSION['age'])){ 
        $age = $_SESSION['age'];
        if(is_numeric($age) && $age >= 18){
            $age = $_SESSION['age'];
            
        }else{
            echo ("Age must be greater than 18");
        }
    }
    else{
        echo "error";
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Display Data</title>
  </head>
  <body>
    <h1>Submitted Data</h1>
    <p><strong>Name:</strong> <?php echo $fname . " ". $lname; ?></p>
    <p><strong>User name:</strong> <?php echo $uname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Password:</strong> <?php echo $password; ?></p>
    <p><strong>Number:</strong> <?php echo $number; ?></p>
    <p><strong>Date og birth:</strong> <?php echo $dob; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>Do you have a driving license?:</strong> <?php echo $drive; ?></p>
    <?php if(isset($_SESSION['drive'])){
        $drive = $_SESSION['drive'];
        if($drive == 'yes'){
            $licenseNumber = $_SESSION['licensenumber'];?>
            <p><strong>License Number:</strong> <?php echo $licenseNumber; ?></p>
        <?php }else{

        }
    }?>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Degree:</strong> <?php echo $degree; ?></p>
    <p><strong>College:</strong> <?php echo $college; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
    <p><strong>State:</strong> <?php echo $state; ?></p>
    <p><strong>Country:</strong> <?php echo $country; ?></p>
    <p><strong>Pincode:</strong> <?php echo $code; ?></p>
  </body>
</html>




      

