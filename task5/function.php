<?php
include 'database.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}



function edit(){
  global $con;

  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $code = $_POST["code"];
  $number = $_POST["number"];

  $query = "UPDATE register SET name = '$name', email = '$email',code = '$code', phone_number = '$number' WHERE id = $id";
  mysqli_query($con, $query);
  echo "Updated Successfully";
}
