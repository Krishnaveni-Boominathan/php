<!DOCTYPE html>
<html>
 <head>
  <title>Submit Form </title>
  <link href="style.css" rel="stylesheet"> 
 </head>
 <body>
<div class="form-container">
  <form id="input_form" name="form">
  <h3>New Registration Form</h3>
  <div>
  <input type="text" placeholder="Name" name="fullname" id="fullname" />
  <input type="text" placeholder="username" name="username" id="username" />
  <input id="submit" type="button" value="Submit">
  </div>
  </form>
  <div id="ajax-data"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#submit").on('click', function(){
    $.ajax({
      type: 'post',
      url: "server.php",
      data: $('#input_form').serialize(), 
      success: function(response) {
        $("#ajax-data").html(response);
      },
      error: function() {
        alert("error");
      }
    });
});
</script>
</body>
</html>
