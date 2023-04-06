<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
  </head>
  <body>
    <h2>Edit User</h2>
    <form action="" method="post">
      <?php
      require 'config.php';
      $id = $_GET["id"];
      $sql="SELECT * FROM users WHERE id = $id";
      $rows = mysqli_fetch_assoc(mysqli_query($conn, $sql));
      ?>
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
      <label for="">Name</label>
      <input type="text" id="name" value="<?php echo $rows['name']; ?>"> <br>
      <label for="">Email</label>
      <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male" <?php if($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
        <option value="Female" <?php if($rows["gender"] == "Female") echo "selected"; ?> >Female</option>
      </select> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script>
  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        id: $("#id").val(),
        name: $("#name").val(),
        email: $("#email").val(),
        gender: $("#gender").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>
  </body>
</html>