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
<form method="post" id="patient_form">
        <label for="address">address</label><br>
        <input type="text" name="address" id="address"><br><br>
        <button type="submit" name="submit" id="submit">Submit</button><br><br>
        <label for="search">Search doctors list</label><br>
        <input type="text" id="search" name="search" placeholder="Search for doctors..."><br><br>
        <div id="results"></div>
       
            
</form>
 <p><a href="logout.php">Logout</a></p>

</body>
 </html>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
      $('#search').keyup(function() {
        var search = $('#search').val();
        if(search != ''){
            $.ajax({
                        type: "POST",
                        url: "search.php",
                        data: {search:search},
                        success: function(data){
                            $('#results').html(data);
                          
                        },
                        error: function () {
                            alert("error");
                        
                        }
            });
        }else{
            $('#results').html('');
            
        }
      });
    }); 
    $(document).ready(function () {
        $("#patient_form").on('submit',(function(e){
                e.preventDefault();
               
                    $.ajax({
                    type: 'POST',
                    url: 'patient.php',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data);
                        alert('Updated!');
                         

                    },
                    error: function () {
                        
                     alert('error');
                   
                    }
                    
                    
                    });
                    $('#patient_form')[0].reset();
                
  }));
});

    </script>













































































