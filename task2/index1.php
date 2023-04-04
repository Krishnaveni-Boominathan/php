
<html>
    <head>
    </head>
    <body>
        <form action="login1.php" method="post" enctype="multipart/form-data">
            <label >First name</label><br>
            <input type="text"  name="fname" required>
            <br><br>
            <label>Last name</label><br>
            <input type="text" name="lname" required>
            <br><br>
            <label>User name</label><br>
            <input type="text" name="uname" required>
            <br><br>
            <label>Email Id</label><br>
            <input type="text" name="email" required>
           <br><br>
            <label>Phone Number</label><br>
            <input type="text" name="number" required>
            <br><br>
            <label>Date of birth</label><br>
            <input type="date" name="dob" required>
            <br><br>
            <label>Gender</label><br>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" required>Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" required>Male
            <br>
            <label>Address</label><br>
            <textarea name="address"></textarea><br><br>
            <label >State </label><br>
            <input type="text"  name="state" required><br><br>
            <label >Country</label><br>
            <input type="text"  name="country" required>
            <br><br>
            <label >Pincode:</label><br>
            <input type="text"  name="code" required><br><br>
            <label>Profile Image</label><br>
            <input type="file" name="imageToUpload" id="imageToUpload" required><br><br>
            <?php
            echo "<h2>Educational Details</h2>";
            $education_levels = array('10th', '12th', 'UG', 'PG');
            foreach ($education_levels as $key => $value) {
                
                echo  "<form action='login1.php' method='post' enctype='multipart/form-data'>";
                echo "<label>Degree:</label><br>";
                echo "<input type='text'  name='forminput' value=''.$$key.' required><br><br>";
                echo "<label for=''>Institute/College</label><br>";
                echo "<input type='text'  name='college'><br><br>";
                echo "</form>";
              }
            ?>
            <!-- <h3>Educational Details</h3>
            <label>Degree</label><br>
            <input type="text"  name="degree" required>
            <br><br>
            <label>Institute/College</label><br>
            <input type="text"  name="college" required><br><br> -->
            <label>Attach Documents</label><br>
            <input type="file" name="fileToUpload" value="Download"><br><br>
            <input type="submit" name="submit">
        </form>
<?php
// if(isset($_POST["submit"])) {
//  include "login1.php";
// }
?>

    </body>
</html>