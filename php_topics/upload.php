<?php
$file = $_FILES['imageToUpload']['name'];
print_r($file);
$ok = 1;
$fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES['imageToUpload']['tmp_name']);
    if($check !== false){
        echo "file is an image";
        $ok = 1;
    }else{
        echo "file is not image";
        $ok = 0;
    }
    echo "<br>";
if($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpeg' && $fileType != 'gif' && $fileType != 'pdf' ){
    echo "only jpg, jpeg, png, gif files are allowed";
    $ok = 0;
}
}

echo "<br>";
if(file_exists($file)){
    echo "file already exists";
    $ok = 0;
}
echo "<br>";
if($_FILES["imageToUpload"]["size"] > 5000000){
    echo "file is too large";
    $ok = 0;
}

echo "<br>";
if($ok == 0){
    echo "file was not uploaded";
}else{
    if(move_uploaded_file($_FILES['imageToUpload']['tmp_name'], "uploads/". $file)){
        echo "file " .htmlspecialchars(basename($_FILES['imageToUpload']['name']))." has been uploaded";
    }else{
        echo "there was an error uploading your file";
    }
}
?>