<html>
    <head>
</head>
<body>
<?php
include 'database.php';
$output='';
$stmt    = "SELECT * FROM register WHERE name LIKE '%".$_POST['search']."%'";
$result   = mysqli_query($con, $stmt);

if (mysqli_num_rows($result) > 0) {
    $output .= '<div>Doctors list</div>';
   
        while($row = mysqli_fetch_assoc($result)) {
            // echo "Hello: " . $row["type"] . "<br>";
            
            $output.=  $row["name"] . '<a  href="appointment.php?id=<?php echo $row["id"];?> &nbsp;Make Appointment</a><br>' ; ?>
               
            
       <?php 
       }
        echo $output;
    }
    else {
            echo "0 results";
        }

?>
</body>
</html>