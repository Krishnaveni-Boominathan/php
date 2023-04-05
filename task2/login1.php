<html>
    <head>
        <style>
            img{
                height: 100px;
                width: 100px;
            }
        </style>
    </head>
<?php
$fname = $lname = $uname = $email = $num = $dob = $gender= $edu = $cou= $pin = $add = $state = $coll = "";
$fnameErr = $lnameErr = $unameErr = $emailErr = $numErr = $dobErr = $genderErr = $eduErr = $couErr= $pinErr= $addErr = $stateErr = $collErr ="";
//$marks_10th = $_POST['10th_marks'];
if(isset($_POST["submit"])) {
  foreach ($_POST as $key => $value) {
    $key = strip_tags($key); // to prevent scripts being injected into the page
    $value = strip_tags($value);
    
      echo $key . ' ' . $value;
    }
// if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['fname'])){
        $fnameErr = "Name is required";
        header("Location:index1.php");
        exit();
    }else{
        $fname = input_check($_POST['fname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }
    // if(!empty($_POST)){
    //   print_r($_POST);
    // }
    if(empty($_POST['lname'])){
        $lnameErr = "Name is required";
        echo $lnameErr;
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
        if (!preg_match('/^[0-9]{10}$/', $num)) {  
        $numErr = "Invalid Number";  
        }  
    } 
    if (empty($_POST["code"])) {  
        $pinErr = "Pincode is required";  
    } else {  
        $pin = input_check($_POST["code"]);  
        if (!preg_match('/^[0-9]{6}$/', $pin)) {  
        $pinErr = "Invalid Pincode";  
        }  
    } 
    if (empty($_POST["dob"])) {  
        $dobErr = "Date of birth is required";  
    } else {  
        $dob = ($_POST["dob"]);  
        $format = date("d M Y",strtotime($dob));
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
    if (empty($_POST["state"])) {  
      $stateErr = "State is required";  
  } else {  
      $state = input_check($_POST['state']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$cou)) {
          $stateErr = "Only letters and white space allowed";
      }  
  } 
  if (empty($_POST["address"])) {  
    $addErr = "Address is required";  
} else {  
    $add = input_check($_POST['address']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$cou)) {
        $addErr = "Only letters and white space allowed";
    }  
} 
if (empty($_POST["college"])) {  
  $collErr = "College is required";  
} else {  
  $coll = input_check($_POST['college']);
  if (!preg_match("/^[a-zA-Z-' ]*$/",$cou)) {
      $collErr = "Only letters and white space allowed";
  }  
} 

    //profile
    $file = "uploads/". $_FILES["imageToUpload"]["name"];
    $target_dir = __DIR__."/uploads/";
    $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = (pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = ($_FILES["imageToUpload"]["tmp_name"]);
      if($check !== false) {
        // echo "File is an image <br>";
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
    
    
    if ($_FILES["imageToUpload"]["size"] > 500000) {
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
    
      if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $file)) {
        $img = "<img src=".$file.">";
        
      }else{
        echo "error";
      }  
    }

    //attachment
    $file_upload = "uploads/". $_FILES["fileToUpload"]["name"];
    $target_dir = __DIR__."/uploads/";
    $target_file_upload = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType_1 = (pathinfo($target_file_upload,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check1 = ($_FILES["fileToUpload"]["tmp_name"]);
      if($check1 !== false) {
        // echo "File is an image <br>";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    
    
    // Check if file already exists
    if (file_exists($target_file_upload)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg"
    && $imageFileType_1 != "gif" && $imageFileType_1 != "pdf" && $imageFileType_1 != "doc" && $imageFileType_1 != "txt" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_upload)) {
       // $img1 = "<a href=".$file_upload." download>Download the attachment </a>";
        $img1 = "<a href=".$file_upload." download >Download the attachment </a>";
       
        
      }else{
        echo "error";
      }  
    }


}
//}
function input_check($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<?php  
    echo "<h2> Educational Details Form: </h2>";  
    echo "Name: ". $fname ." ". $lname;  
    echo "<br>"; 
    echo "Username: ".$uname;
    echo "<br>";
    echo "Email Id: " .$email;
    echo "<br>";  
    echo "Phone Number: ".$num;  
    echo "<br>";
    echo "Date of Birth: " .$format;  
    echo "<br>";
    echo "Gender: ".$gender;  
    echo "<br>"; 
    echo "Address: $add" ;
    echo "<br>"; 
    echo "State: $state ";
    echo "<br>";
    echo "Country: ".$cou;
    echo "<br>";
    echo "Pincode: $pin" ;
    echo "<br>";
    echo "Degree: ".$edu; 
    echo "<br>" ;
    echo "College: $coll" ;
    echo "<br>";
    echo "Profile Image:" .$img;
    echo "<br>";
    echo $img1;
    echo "<br>";
  //echo "$marks_10th";


?> 
</html>   