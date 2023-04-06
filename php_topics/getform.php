<html>

<head></head>

<body>
    <div class="container mt-2">
        <div class="page-header">
            <h2>Customers List</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'database.php';

                        $sql = "select * from usertable";
                        $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0) {
                            while ($array = mysqli_fetch_row($result)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $array[0]; ?>
                                    </th>
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
                                    <td>
                                    <button type="button" name="update" id="'.$row['id'].'" >Update</button>
                                    </td>
                                    <td>
                                    <button type="button" name="delete" id="'.$row['id'].'" >Delete</button>
                                    </td>
                                <tr>
                                    <?php }
                        }
                        ?>
                    </tbody>
</body>

</html>

<?php
// include 'database.php';

// $sql = "select * from usertable";
// $result = mysqli_query($conn, $sql);
// $query = mysqli_fetch_array($result);
// if ($query) {
//     print_r($query);
// } else {
//     echo "Error";
// }

?>