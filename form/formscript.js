function formsubmit() {
    var empname = document.getElementById('emp_name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var username = document.getElementById('username').value;
    var pwd = document.getElementById('password').value;
    //store all the submitted data in astring.
    var formdata = '&empname=' + empname + '&emailid=' + email + '&phn=' + phone + '&address=' + address +'&uname=' + username+ '&password=' + pwd;
	// validate the form input
	if (empname == '' ) {
		alert("Please Enter Employee Name");
		return false;
	}
	if(email == '') {
		alert("Please Enter Email id");
		return false;
	}
	if(username == '') {
		alert("Please Enter Username");
		return false;
	}
	if(pwd == '') {
		alert("Please Enter Password");
		return false;
	}
	else {
	// AJAX code to submit form.
	$.ajax({
		 type: "POST",
		 url: "storeempdata.php", //call storeemdata.php to store form data
		 data: formdata,
		 cache: false,
		 success: function(html) {
		  alert(html);
		 }
	});
	}
	return false;
}

//https://www.etutorialspoint.com/index.php/9-submit-form-data-using-php-and-javascript