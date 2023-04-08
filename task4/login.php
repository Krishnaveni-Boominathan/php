<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
 
</head>

<body>
<form id="login-form"  method="post">
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
$(document).ready(function () {
  $("#login-form").submit(function(event){
        event.preventDefault();
      $.ajax({
                    type: 'POST',
                    url: 'log.php',
                    data: $(this).serialize(),
                    success: function(data) {
                  
                     window.location.href = 'log1.php?' + data;
                       
                        
                    },
                    error: function () {
                       
                    alert('Login not Successful!');
                    }
                    
                    
        });
                  $('#login-form')[0].reset();
                
      });       
});
//     $('#login-form').submit(function(e) {
//     //e.preventDefault(); // prevent default form submit action

//     // get form data
//     var formData = {
//       username: $('#uname]').val(),
//       password: $('#password]').val()
//     };

//     // ajax post request
//     $.ajax({
//       type: 'POST',
//       url: 'log.php',
//       data: formData,
//       dataType: 'json',
//       encode: true,
//       success: function(data) {
//         console.log(data);
//         // show success message
//         $('#login-form')[0].reset();
//         alert('Login Successful!');
//       },
//       error: function(xhr, status, error) {
//         console.log(xhr.responseText);
//         // show error message
//         alert('Login Failed. Please try again later.');
//       }
//     });
//   });
// });
        // $(document).ready(function () {
        //     $("#myform").submit(function (event) {
        //         event.preventDefault();

        //         $.ajax({
        //             type: 'post',
        //             url: "log.php",
        //             data: $(this).serialize(),
        //             success: function (data) {
        //                alert("success");
        //             },
        //             error: function () {
        //                 alert("error");
        //             }
        //         });

        //     });
        // });



    </script> 
    
</body>
</html>