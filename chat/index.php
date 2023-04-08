<!DOCTYPE html>
<html>
<head>
	<title>Registration Form with Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
</head>
<body>
	<h2>Registration Form</h2>
	<form id="register-form">
		<label for="name">Name:</label><br>
		<input type="text" id="name" name="name"><br>

		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email"><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br>

		<input type="submit" value="Register">
	</form>
	<div id="response"></div>
    <script>
    $(document).ready(function() {
	$('#register-form').submit(function(event) {
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'register.php',
			data: formData,
			dataType: 'json',
			success: function(response) {
				if (response.status == 'success') {
					$('#response').html('<a href="'+response.login_link+'">Login here</a>');
					$('#response').append('<p>Name: '+response.name+'</p>');
					$('#response').append('<p>Email: '+response.email+'</p>');
				} else {
					$('#response').html(response.message);
				}
			}
		});
	});
});
</script>
</body>
</html>
