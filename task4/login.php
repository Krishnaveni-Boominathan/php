<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script >
        $(document).ready(function(){
            $("#login_form").on('submit',(function(e){
                var username = $("#uname").val();
                var password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "log1.php",
                    data: $(this).serialize(),
                    success: function(data){
                        console.log(data);
                           window.location.href = "log1.php?" + data;
                    },
                    error: function () {
                        alert("error");
                      
                    }
                });
            }));
        });
    </script>
</head>
<body>
    <h1>Login Form</h1>
    <form id="login_form" action="log1.php" method="post">
        <label>Username:</label>
        <input type="text" id="uname" name="uname"><br><br>
        <label>Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" id="submit">Submit</button>  
    </form>
  
</body>
</html>