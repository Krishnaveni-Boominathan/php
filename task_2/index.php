
<html>
    <head>
        <style>
            img{
                height: 100px;
                width: 100px;
            }
        </style>
    <?php
    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $uname = $_POST['uname'];
    // $email = $_POST['email'];
    // $gender = $_POST['gender'];
    // $num= $_POST["number"];
    // $format = $_POST["dob"];
    // $edu = $_POST["degree"];
    // $cou = $_POST['country'];
$fname = $lname = $uname = $email = $num = $dob = $gender= $edu = $cou= "";
$fnameErr = $lnameErr = $unameErr = $emailErr = $numErr = $dobErr = $genderErr = $eduErr = $couErr= "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['fname'])){
        $fnameErr = "Name is required";
    }else{
        $fname = input_check($_POST['fname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['lname'])){
        $lnameErr = "Name is required";
    }else{
        $lname = input_check($_POST['lname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $lnameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['uname']) ){
        $unameErr = "Name is required";
    }else{
        $uname = input_check($_POST['uname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
            $unameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = input_check($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if(empty($_POST['gender'])){
        $genderErr = "Gender is required";
    }else{
        $gender = input_check($_POST['gender']);
    }
    if (empty($_POST["number"])) {  
        $numErr = "Phone Number is required";  
    } else {  
        $num = input_check($_POST["number"]);  
        if (!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/",$num)) {  
        $numErr = "Invalid Number";  
        }  
    } 
    if (empty($_POST["dob"])) {  
        $dobErr = "Date of birth is required";  
    } else {  
        $dob = ($_POST["dob"]);  
    } 
    if (empty($_POST["degree"])) {  
        $eduErr = "Degree is required";  
    } else {  
        $edu = ($_POST["degree"]);  
    } 
    if (empty($_POST["country"])) {  
        $couErr = "Country is required";  
    } else {  
        $cou = input_check($_POST['country']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$cou)) {
            $couErr = "Only letters and white space allowed";
        }  
    } 


// $pathinfo = pathinfo($_FILES["fileToUpload"]["name"]);
// $base = $pathinfo["filename"];
// $base = preg_replace("/[^\w-]/", "_", $base);
// $filename = $base. ".". $pathinfo["extension"];
$file = "uploads/". $_FILES["fileToUpload"]["name"];
$target_dir = __DIR__."/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = (pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = ($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image -<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
    $img = "<img src=".$file.">";
    echo "successfully";
  }else{
    echo "error";
  }
}
}

function input_check($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    </head>
    <body>
        <form action="login.php" method="post" enctype="multipart/form-data">
            <label >First name</label><br>
            <input type="text"  name="fname">
            <span class="error">* <?php echo $fnameErr;?><br><br>
            <label>Last name</label><br>
            <input type="text" name="lname">
            <span class="error">* <?php echo $fnameErr;?><br><br>
            <label>User name</label><br>
            <input type="text" name="uname">
            <span class="error">* <?php echo $fnameErr;?><br><br>
            <label>Email Id</label><br>
            <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?><br><br>
            <label>Phone Number</label><br>
            <input type="text" name="number">
            <span class="error">* <?php echo $numErr;?><br><br>
            <label>Date of birth</label><br>
            <input type="date" name="dob">
            <span class="error">* <?php echo $dobErr;?><br><br>
            <label>Gender</label><br>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <label>Address</label><br>
            <textarea name="address"></textarea><br><br>
            <label >State </label><br>
            <input type="text"  name="state"><br><br>
            <label >Country</label><br>
            <input type="text"  name="country">
            <span class="error">* <?php echo $couErr;?><br><br>
            <label >Pincode:</label><br>
            <input type="text"  name="code"><br><br>
            <label>Profile Image</label><br>
            <input type="file" name="imageToUpload" id="imageToUpload" ><br><br>
            <input type="hidden" name="userID" value="<?php echo $userID;?>">
            <h3>Educational Details</h3>
            <label>Degree</label><br>
            <input type="text"  name="degree">
            <span class="error">* <?php echo $eduErr;?><br><br>
            <label>Institute/College</label><br>
            <input type="text"  name="college"><br><br>
            <label>Attach Documents</label><br>
            <input type="file" name="fileToUpload" value="Download"><br><br>
            <input type="submit" name="submit">
        </form>

        <?php  
                // echo "<h2> Your Input: </h2>";  
                // echo $fname;  
                // echo "<br>"; 
                // echo $lname;
                // echo "<br>" ;
                // echo $uname;
                // echo "<br>";
                // echo $email;
                // echo "<br>";  
                // echo $num;  
                // echo "<br>";
                // echo $dob;  
                // echo "<br>";
                // echo $gender;  
                // echo "<br>";  
                // echo $edu; 
                // echo "<br>" ;
                // echo $cou;
                // echo "<br>";
                // // echo $img;
                // echo "<br>";
                       
            ?> 
    </body>
</html>