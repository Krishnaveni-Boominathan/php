<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <button id="showData">Show User Data</button>

    <div id="table-container"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#showData").click(function (event) {
                $.ajax({
                    type: 'get',
                    url: "getform.php",
                    data: $(this).serialize(),
                    success: function (data) {
                        $('#table-container').html(data);

                    },
                    error: function () {
                        alert("error");
                    }
                });
            });
        });

    </script>

</body>

</html>