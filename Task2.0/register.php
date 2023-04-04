<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register page</title>
<link rel="stylesheet" href="style2.css">
<!-- <link rel="stylesheet" href="style1.css"/> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<div class="form">
    <form id="register_form" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">    	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass"id="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="country" id="country" placeholder="Countrycode" required="required">
        </div>
        <div class="form-group">
        <select id="type" name="type"  >
            <option value="" disabled selected hidden>Select Type...</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select>
        </div>
        <div class="form-group">
            <button type="submit" name="save" id="save">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
<script>
$(document).ready(function() {

	$('#save').on('click', function() {
		$("#save").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
        var pass = $('#pass').val();
		var phone = $('#phone').val();
		var country = $('#country').val();
		var type = $('#type').val();
		if(name!="" && email!="" && pass!="" && phone!="" && country!="" && type!="" ){
			$.ajax({
				url: "register_a.php",
				type: "POST",
				data: {
					at: 1,
					name: name,
					email: email,
                    pass: pass,
					phone: phone,
					country: country,
					type: type						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("save").removeAttr("disabled");
						$('#register_form').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !'); 						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>