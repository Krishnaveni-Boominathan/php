<html>
    <head></head>
    <body>
<?php
include "database.php";
  session_start();    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['type'])){
        $name= $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        
        
    $sql = "SELECT * FROM register WHERE name='$name' AND type='$type'";

    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Hello: " . $row["type"] . "<br>";
            echo "name " . $row["name"] . "<br>";
            echo "email " . $row["email"] . "<br>";
            echo "phone number " .$row["code"]. "-". $row["phone_number"] . "<br>";?>
            <a href="editprofile.php?id=<?php echo $row['id'];?>">Update</a>
            <?php
        }
    } else {
        echo "0 results";
    }
        
    }
    
   
?>
<form method="post" id="doctor_form">
        <label for="fee">Fees</label><br>
        <input type="text" name="fee" id="fee">
        <br><br>
        <label for="clinic">Clinic Details</label><br>
        <input type="checkbox" name="clinic" id="clinic">
        <br><br>
        <div id="clinic_list" style="display: none;">
           
            <label for="country">Country</label><br>
            <input type="text" name="country" id="country">
            <br><br>
            <label for="city">city</label><br>
            <input type="text" name="city" id="city">
            <br><br>
            <label for="state">state</label><br>
            <input type="text" name="state" id="state">
            <br><br>
            <label for="pincode">pincode</label><br>
            <input type="text" name="pincode" id="pincode">
            <br><br>
        </div>
        <button type="submit" name="submit" id="submit">Submit</button>
        <button id="showData">Show appointment list</button>
        <div id="appointments"> 
        <!-- <table >
        <thead>
        <tr>
            <th>Patient Name</th>
            <th>Date</th>
            <th>Time</th>     
            <th>Reason</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
        </table> -->
</div>
</form>
 <p><a href="logout.php">Logout</a></p>
</body>
 </html>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
         $(document).ready(function () {
            $('#clinic').click(function () {
                var clinic = $('#clinic').val();
                
                    $('#clinic_list').show();
                

            });

        });
        $(document).ready(function() {
            $("#showData").click(function (event) {
                alert('appointment');
             $.ajax({
            
            url: 'get_appointments.php',
            type: 'GET',
            data: $(this).serialize(),
            success: function(data) {
                console.log(data);
                $('#appointments').html(data);
                // Populate the table with the list of appointments
                // var table = $('#appointments tbody');
                // $.each(data, function(i, appointment) {
                //     var row = $('<tr>');
                //     row.append($('<td>').text(appointment.patient_name));
                //     row.append($('<td>').text(appointment.date));
                //     row.append($('<td>').text(appointment.time));
                    
                //     row.append($('<td>').text(appointment.reason));
                //     table.append(row);
                // });
            },
            error: function() {
               console.log("error");
            }
        });
});
});
$(document).ready(function () {
        $("#doctor_form").on('submit',(function(e){
                e.preventDefault();
               
                    $.ajax({
                    type: 'POST',
                    url: 'doctor.php',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data);
                        alert('Updated!');
                         

                    },
                    error: function () {
                        
                     alert('error');
                   
                    }
                    
                    
                    });
                    $('#doctor_form')[0].reset();
                
  }));
});

    </script>












































































   
 