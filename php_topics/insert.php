<!DOCTYPE html>
<html>
<head>
<body>
    <h3>Insert User Data</h3>
    <p id="msg"></p>
    <form id="myForm" method="POST">
        <label>Name<label>
        <input type="text" placeholder="Enter your name" name="name" required><br><br>
        <label>Email<label>
        <input type="text" placeholder="Enter your email" name="email" required><br><br>
        <label>City<label>
        <input type="text" placeholder="Enter your city" name="city" required><br><br>
        <label>Country<label>
        <input type="text" placeholder="Enter your country" name="country" required><br><br>
        <button type="submit">Submit</button>
    </form>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: "insertform.php",
                    data: $(this).serialize(), 
                    success: function(data) {
                        $('#msg').html(data);
                        $('#myForm').find('input').val('');
                    },
                    error: function() {
                        alert("error");
                    }
                });
            });
        });
    </script>
</body>
</head>
</html>