<h1>Blog view page</h1>
<?php
if(count($articles)>0){
    ?>
    <ul>
        <?php foreach($articles as $a){
            echo "<li>".$a['title']."</li>";
        }
        ?>
    </ul>
    <?php
}
else{
    echo "No records found";
}

?>