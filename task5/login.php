<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script >
        $(document).ready(function(){
            $("#login_form").on('submit',(function(e){
                var name = $("#name").val();
                var email = $("#email").val();
                var type = $('#type').val();
                if(name == '' ||  email == '' || type== ''){
					alert("Please fill all fields.");
                 }
                else if(type === 'doctor'){
                    alert('hello doctor');
                    $.ajax({
                        type: "POST",
                        url: "dashboard_doctor.php",
                        data: $(this).serialize(),
                        success: function(data){
                            console.log(data);
                        window.location.href = "dashboard_doctor.php?" + data;
                        },
                        error: function () {
                            alert("error");
                        
                        }
                    });
                }else{
                    alert('hello patient');
                    $.ajax({
                        type: "POST",
                        url: "dashboard_patient.php",
                        data: $(this).serialize(),
                        success: function(data){
                            console.log(data);
                           window.location.href = "dashboard_patient.php?" + data;
                        },
                        error: function () {
                            alert("error");
                        
                        }
                    });
                }
            }));
        });
        
    </script>
</head>
<body>
    <h1>Login Form</h1>
    <form id="login_form" action="dashboard_doctor.php"  method="post">
        <label>Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label>Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">--Select Type--</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select>
        <br><br>
        <button type="submit" id="submit">Submit</button>  
    </form>
  
</body>
</html>