<?php
    include 'database.php';
?>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script>
        $(document).ready(function(){
            var commentscount = 2;
            $("button").click(function(){
                commentscount =commentscount +2;
                $("#comments").load("loadcomments.php",{
                    newcommentscount : commentscount
                });
            });
        });
   </script>
</head>
    <body>
        <div id="comments">
            <?php
                $sql = "SELECT * FROM comments LIMIT 2";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<p>";
                        echo $row['author'];
                        echo "<br>";
                        echo $row['message'];
                        echo "</p>";
                    }
                }else{
                    echo "There are no comments";
                }
            ?>
        </div>
        <button>Show More Comments</button>

    </body>
</html>