<!DOCTYPE html>
<html>
  <head>
    <title>Index</title>
  </head>
  <body>
    <h2>Index</h2>
    <table>
      <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Action</td>
      </tr>
      <?php
      require 'config.php';
      $sql = "select * from users";
      $rows = mysqli_query($conn,$sql);
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td>
          <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
          <button type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Add User</a>
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