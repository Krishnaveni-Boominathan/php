<h3><?php echo $page_heading; ?></h3>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
<?php
    foreach($employee as $emp)
    {
        ?>
    <tr>
        <td><?php echo $emp['id'];?></td>
        <td><?php echo $emp['name'];?></td>
        <td><?php echo $emp['email'];?></td>
    </tr>
        <?php 
    }
    ?>
</table>