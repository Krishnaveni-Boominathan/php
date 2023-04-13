<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
   
</head>

<body>
    
    <form id="register_form"  method="post">
        <h1>Registration</h1>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email Id</label><br>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="number">Phone Number</label><br>
        <label for="code"></label>
        <select id="code" name="code">
            <option value="">--SelectCountryCode--</option>
            <option value="91">91</option>
            <option value="35">35</option>
        </select>
        <input type="text" name="number" id="number">
        <!-- <span id="phone-number-status"></span> -->
        <br><br>
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">--Select Type--</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select>
        <br><br>
        <button type="submit" name="submit" id="submit">Submit</button>

    </form>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      $(document).ready(function () {
        $("#register_form").on('submit',(function(e){
                e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var number = $('#number').val();
                var code = $('#code').val();
                var type = $('#type').val();
                if(name == '' ||  email == '' || number == '' ||  type == ''){
					alert("Please fill all fields.");
                 }
                else{
                    $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data);
                        alert('Registration Successful!');
                         window.location.href = 'login.php';

                    },
                    error: function () {
                        
                     alert('Registration not Successful!');
                     window.location.href = 'registration.php';
                    }
                    
                    
                    });
                    $('#register_form')[0].reset();
                }
  }));
});







    </script> 
</body>

</html>