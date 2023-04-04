<!DOCTYPE html>
<html>
 <head>
  <title>Submit Form Using AJAX, PHP and javascript</title>
  <link href="style.css" rel="stylesheet"> 
 </head>
 <body>
<div class="form-container">
<form id="emp_form" name="form">
  <h3>New Employee Registration Form</h3>
  <div>
  <label>Employee Name* :</label> 
  <input type="text" name="emp_name" id="emp_name" />
  <label>Email* :</label>  
  <input type="text" name="email" id="email" />
  <label>Phone :</label>  
  <input type="text" name="phone" id="phone"  />
  <label>Username* :</label>  
  <input type="text" name="username" id="username" />
  <label>Password* : </label>  
  <input type="password" name="password" id="password"  />
  <label>  </label>  
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
      url: "storeempdata.php",
      data: $('#emp_form').serialize(), 
      success: function(response) {
        $("#ajax-data").html(response);
      },
      error: function() {
        alert("error");
      }
    });
});
</script>
  <!-- <div id="clear"></div> -->
</body>
</html>





<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
<script>
	
	$(document).on('click','#submit',function(e){
		
		e.preventDefault();
			
		var name = $('#txt_name').val();
		var email 	 = $('#txt_email').val();
		var password = $('#txt_password').val();
        var phone = $('#txt_phone').val();
        var country = $('#txt_country').val();
        var type = $('#txt_type').val();
			
		var atpos  = email.indexOf('@');
		var dotpos = email.lastIndexOf('.com');
			
		if(name == ''){ // check username not empty
			alert('please enter username !!'); 
		}
		else if(!/^[a-z A-Z]+$/.test(name)){ // check username allowed capital and small letters 
			alert('username only capital and small letters are allowed !!'); 
		}
		else if(email == ''){ //check email not empty
			alert('please enter email address !!'); 
		}
		else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
			alert('please enter valid email address !!'); 
		}
		else if(password == ''){ //check password not empty
			alert('please enter password !!'); 
		}
		else if(password.length < 3){ //check password value length six 
			alert('password must be 6 !!');
		}else if(phone == ''){ //check password not empty
			alert('please enter phone !!'); 
		}else if(phone <= 10){
            alert('please check phone !!'); 
        } 
		else{			
			$.ajax({
				url: 'register_a.php',
				type: 'post',
				data: 
					{newname:name, 
					 newemail:email, 
					 newpassword:password,
                     newphone:phone,
                     newcountry:country,
                     newtype:type
					},
				success: function(response){
					$('#message').html(response);
				}
			});
				
			$('#signup_form')[0].reset();
		}
	});

</script> -->




<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register page</title>
<link rel="stylesheet" href="style2.css">
 <!-- <link rel="stylesheet" href="style1.css"/>  -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

<!-- </head>
<body>
<div class="form">
    <form id="myForm" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Name" required="required">    	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="country" placeholder="Countrycode" required="required">
        </div>
        <div class="form-group">
        <select id="type" name="type"  >
            <option value="" disabled selected hidden>Select Type...</option>
            <option >Patient</option>
            <option>Doctor</option>
        </select>
        </div>
        <div class="form-group">
            <button type="submit" name="save" id="submit-btn">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div> --> 
    <!-- <div id="result"></div> -->
<!-- <script>
    $(document).ready(function(){
        $("myForm").on('save', function(e){
            e.preventDefault();
            alert("clicked");
        });
    });

</script> -->

<!-- 
</body>
</html>  -->