<?php
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    exit("POST request method required");
}
if(empty($_FILES)){
    exit("error in php.ini");
}
if($_FILES["image"]["error"]){
    switch($_FILES["image"]["error"]){
        case UPLOAD_ERR_PARTIAL:
            exit("File only partially uploaded");
            break;
        case UPLOAD_ERR_NO_FILE:
            exit("File was not uploaded");
            break;
        case UPLOAD_ERR_EXTENSION:
            exit("File upload stopped");
            break;
        case UPLOAD_ERR_FORM_SIZE:
            exit("File exceeds MAX_FILE_SIZE");
            break;
        case UPLOAD_ERR_INI_SIZE:
            exit("File exceeds MAX_FILE_SIZE");
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            exit("Temporary folder not found");
            break;
        case UPLOAD_ERR_CANT_WRITE:
            exit("Failed to write file");
            break;
        default:
            exit("Unknown upload error");
            break;
    }
}
if($_FILES["image"]["size"] > 1048576){
    exit("File too large");
}
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($_FILES["image"]["tmp_name"]);
// exit($mime_type);

// $mime_types = ["pdf" => "application/pdf", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png"];
// if(! in_array($_FILES["image"]["type"], $mime_types)){
//     exit("Invalid file type");
// }
$file = "uploads/". $_FILES["image"]["name"];
$pathinfo = pathinfo($_FILES["image"]["name"]);
$base = $pathinfo["filename"];
$base = preg_replace("/[^\w-]/", "_", $base);
$filename = $base. ".". $pathinfo["extension"];
//$filename = $_FILES["image"]["name"];
$destination = __DIR__. "/uploads/".$filename;
$i = 1;
while(file_exists($destination)){
    $filename = $base. "($i).". $pathinfo["extension"];
    $destination = __DIR__. "/uploads/".$filename;
    $i++;
}
if(!move_uploaded_file($_FILES["image"]["tmp_name"], $file)){
    exit("can't move to uploaded file");
}

echo "File uploaded successfully";
?>