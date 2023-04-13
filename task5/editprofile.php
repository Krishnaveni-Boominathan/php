<!DOCTYPE html>
<html>
  <head>
    <title>Edit User</title>
  </head>
  <body>
    <h2>Edit User</h2>
    <form method="post">
      <?php
      include 'database.php';
      $id = $_GET["id"];
      $rows = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM register WHERE id = $id"));
      ?>
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
      <label for="">Name</label>
      <input type="text" id="name" value="<?php echo $rows['name']; ?>"> <br>
      <label for="">Email</label>
      <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br>
      <br><br>
        <label for="number">Phone Number</label><br>
        <label for="code"></label>
        <select id="code" name="code" value="<?php echo $rows['code']; ?>">
            <option value="">--SelectCountryCode--</option>
            <option value="91">91</option>
            <option value="35">35</option>
        </select>
        <input type="text" name="number" id="number" value="<?php echo $rows['phone_number']; ?>">
        <!-- <span id="phone-number-status"></span> -->
        <br><br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</script>
<script>
  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        id: $("#id").val(),
        name: $("#name").val(),
        email: $("#email").val(),
        code : $("#code").val(),
        number: $("#number").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
            alert(response);
           // window.location.href = 'dashboard.php';
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