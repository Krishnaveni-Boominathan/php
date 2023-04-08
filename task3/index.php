
<html>
    <head>    
    </head>
    <body>
        <form  id="myForm" method="post"  >
 
            <label for="fname">First name</label><br>
            <input type="text"  name="fname" id="fname">
            <br><br>
            <label for="lname">Last name</label><br>
            <input type="text" name="lname" id="lname">
            <br><br>
            <label for="uname">User name</label><br>
            <input type="text" name="uname" id="uname">
            <br><br>
            <label for="email">Email Id</label><br>
            <input type="text" name="email"  id="email">
           <br><br>
           <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
           <br><br>
            <label for="number">Phone Number</label><br>
            <input type="text" name="number" id="number">
            <br><br>
            <label for="dob">Date of birth</label><br>
            <input type="date" name="dob" id="dob">
            <br><br>
            <label for="age">Age</label><br>
            <input type="text" name="age" id="age">
           <br><br>
            <label>Do you have a driving license?</label>
            <input type="radio" name="drive" class="drive" <?php if (isset($drive) && $drive=="yes") echo "checked";?> value="yes" >Yes
            <input type="radio" name="drive" class="drive"<?php if (isset($drive) && $drive=="no") echo "checked";?> value="no" >No
            <br><br>
            <div id="license-number-field" style="display: none;">
                <label for="license-number">License Number:</label>
                <input type="text" name="licensenumber">
            </div><br><br>
            <label>Gender</label><br>
            <input type="radio" name="gender" id="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" >Female
            <input type="radio" name="gender" id="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" >Male
            <br><br>
            <label>Address</label><br>
            <textarea name="address" id="address"></textarea><br><br>
            <label >State </label><br>
            <input type="text"  name="state" id="state"><br><br>
            <label >Country</label><br>
            <input type="text"  name="country"  id="country">
            <br><br>
            <label >Pincode:</label><br>
            <input type="text"  name="code" id="code"><br><br>
            <h3>Educational Details</h3>
            <label>Degree</label><br>
            <input type="text"  name="degree" required>
            <br><br>
            <label>Institute/College</label><br>
            <input type="text"  name="college" required><br><br>
            <button type="submit" id="submit">Submit</button>         
        </form>
        

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        // $(document).ready(function(){
        //   $("#myForm").submit(function(event){
        //     event.preventDefault(); // stop form from submitting normally
        //    var age = $('#age').val();
        //    var drive = $(this).val();
        //    if(age < 18 ){
        //         alert('Sorry, you must be 18 or older to submit this form.');
        //    }else{
        //     $.ajax({
        //         type: 'post',
        //         url: "login.php",
        //         data: $(this).serialize(), 
        //         success: function(data) {
        //             window.location.href = 'display.php?' + data;
        //         },
        //         error: function() {
        //             alert("error");
        //         }
        //         });
        //     }
        //     });
        //   });

        $(document).ready(function(){
        $('.drive').click(function(){
        var selectedValue = $(this).val();
        if(selectedValue == 'yes'){
            $('#license-number-field').show();
        }
        else{
            $('#license-number-field').hide();
        }
    });
    $('#age').blur(function() {
        var age = $('#age').val();
        if(age < 18 ){
            alert('Sorry, you must be 18 or older to submit this form.');
        }
    });
    $("#myForm").submit(function(event){
        event.preventDefault();
       
            $.ajax({
                    type: 'post',
                    url: "login.php",
                    data: $(this).serialize(), 
                    success: function(data) {
                        window.location.href = 'display.php?' + data;
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