<h3>List of Subjects</h3>
<!-- <p>HTML</p>
<p>CSS</p>
<p>BOOTSTRAP</p>
<p>JAVASCRIPT</p>
<p>JQUERY</p>
<p>PHP</p> -->
<ul>
<?php
//print_r($subject);
foreach($subject as $k){
    ?>
    <li>
    <?php echo $k;?>
    </li>
    <?php
  }
?>
</ul>