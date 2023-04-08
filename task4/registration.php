<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
   
</head>

<body>
    
    <form id="register_form"  method="post">
        <h1>Registration</h1>
        <label for="fname">First name</label><br>
        <input type="text" name="fname" id="fname">
        <br><br>
        <label for="lname">Last name</label><br>
        <input type="text" name="lname" id="lname">
        <br><br>
        <label for="uname">User name</label><br>
        <input type="text" name="uname" id="uname">
        <br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="email">Email Id</label><br>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="number">Phone Number</label><br>
        <input type="text" name="number" id="number">
        <span id="phone-number-status"></span>
        <br><br>
        <label for="age">Age</label><br>
        <input type="text" name="age" id="age">
        <br><br>
        <div id="phone_number_field" style="display: none;">
            <label for="phone-number">Enter your Phone Number:</label>
            <input type="text" name="phonenumber">
        </div><br><br>
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">--Select Type--</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select>
        <br><br>
        <input type="checkbox" name="check" id="check">I agree the terms and conditions.
        <br><br>
        <button type="submit" name="submit" id="submit">Submit</button>

    </form>
    <!-- <div id="ajax-data"></div> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
         $(document).ready(function () {
            $('#age').blur(function () {
                var age = $('#age').val();

                if (age < 18) {
                    $('#phone_number_field').show();
                }
                else {
                    $('#phone_number_field').hide();
                }

            });
            $('#number').blur(function () {
                var number = $('#number').val();

                if (number == 'exists') {
                   $('#phone_number_field').text('This phone number is already registered');
                }else{
                    $('#phone_number_field').text('This phone number is available');
                }
                

            });
        });
        $("#register_form").on('submit',(function(e){
                e.preventDefault();
        
         
        // e.preventDefault();
                var firstname = $('#fname').val();
                var lastname = $('#lname').val();
                var username = $('#uname').val();
                var email = $('#email').val();
                var number = $('#number').val();
                var password = $('#password').val();
                var age = $('#age').val();
                var type = $('#type').val();
                var check = $('#check').val();
                if(firstname == '' || lastname == '' || username == '' || password == '' || email == '' || number == '' || age == '' || type == ''){
					alert("Please fill all fields.");
                 }
               // else if(!check.checked){
                //         alert("Please fill all fields.");
				// }
                else{
                    $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: $(this).serialize(),
                    success: function(data) {
                        // $("#ajax-data").html(data);
                    //    console.log(data);
                     // alert(data);
                        alert('Registration Successful!');

                    },
                    error: function () {
                        
                     alert('Registration not Successful!');
                    }
                    
                    
                    });
                    $('#register_form')[0].reset();
                }
  }));







    </script> 
</body>

</html>