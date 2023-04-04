<?php
$file = $_FILES['fileToUpload']['name'];
$ok = 1;
$fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    if($fileType != 'pdf' && $fileType != 'txt' && $fileType != 'ppt' && $fileType != 'docx'){
        echo "only pdf, txt, ppt, docx files are allowed";
        $ok = 0;
    }
}
echo "<br>";
if(file_exists($file)){
    echo "file already exists";
    $ok = 0;
}
echo "<br>";
if($_FILES["fileToUpload"]["size"] > 5000000){
    echo "file is too large";
    $ok = 0;
}

echo "<br>";
if($ok == 0){
    echo "file was not uploaded";
}else{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "uploads/". $file)){
        echo "file " .htmlspecialchars(basename($_FILES['fileToUpload']['name']))." has been uploaded";
    }else{
        echo "there was an error uploading your file";
    }
}
?>