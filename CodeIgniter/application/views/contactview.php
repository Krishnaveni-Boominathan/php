<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form validation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <h3>Contact form</h3>
    <?php echo form_open(); ?>
    <?php // echo validation_errors(); ?>
    Name : <?php echo form_input("name", set_value('name')); ?><br><br>
    <small><?php echo form_error('name');?></small>
    Number : <?php echo form_input("number", set_value('number')); ?><br><br>
    Email: <input type="text" name="email" value="<?php echo set_value('email');?>"><br><br>
    <small><?php echo form_error('email');?></small>
    <?php echo form_submit("Submit","Submit"); ?>
    <?php echo form_close(); ?>
</body>
</html>