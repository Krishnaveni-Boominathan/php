<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
 
</head>

<body>
<form id="login-form"  action = "log1.php" method="post">
        <h1 >Login</h1>
        <label for="uname">User name</label><br>
        <input type="text" name="uname" id="uname">
        <br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit" id="login">Submit</button>
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
 $(document).ready(function(){
        
    $("#login-form").submit(function(event){
        event.preventDefault();
       
            $.ajax({
                    type: 'post',
                    url: "log.php",
                    data: $(this).serialize(), 
                    success: function(data) {
                        window.location.href = 'log1.php?' + data;
                    },
                    error: function() {
                        alert("error");
                    }
                    });
       
        });
    });

    </script> 
    
</body>
</html>