<!DOCTYPE html>
<html>
  <head>
    <title>Add User</title>
  </head>
  <body>
    <h2>Add User</h2>
    <form action="" method="post">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Email</label>
      <input type="text" id="email" value=""> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
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