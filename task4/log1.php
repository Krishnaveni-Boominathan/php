<?php
 
include "database.php";


    session_start();    
    if(isset($_POST['uname']) && isset($_POST['password'])){
        $uname= $_POST['uname'];
        $password = $_POST['password'];
        
    }
   
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Display Data</title>
  </head>
  <body>
    <p><strong>User name:</strong> <?php echo $uname; ?></p>
    <p><strong>Password:</strong> <?php echo $password; ?></p>
    <?php
    $sql = "SELECT type FROM registration WHERE user_name='$uname'";

    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Hello: " . $row["type"] . "<br>";
        }
    } else {
        echo "0 results";
    }
  
    ?>
    <p><a href="logout.php">Logout</a></p>
  </body>
</html>