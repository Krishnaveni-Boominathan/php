<html>

<head></head>

<body>
    <div class="container mt-2">
        <div class="page-header">
            <h2>appointment list</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Reason</th>
                            
                        </tr>
                    </thead>
                    <tbody>
<?php
include 'database.php';

$stmt    = "SELECT * FROM appointment ";
$result   = mysqli_query($con, $stmt);

if ($result->num_rows > 0) {
    while ($array = mysqli_fetch_row($result)) { ?>
        <tr>
        <td>
                <?php echo $array[0]; ?>
            </td>
            <td>
                <?php echo $array[1]; ?>
            </td>
            <td>
                <?php echo $array[2]; ?>
            </td>
            <td>
                <?php echo $array[3]; ?>
            </td>
            <td>
                <?php echo $array[4]; ?>
            </td>
        
        <tr>
            <?php }
}

?>
                    </tbody>
</body>

</html>
