<html>
<head>
    <title>HTML</title>
</head>
<body>
    <?php echo heading("Heading using php helper- html",3)?>
    <?php echo br(2) ?>
    <?php echo heading("php helper- array",3)?>
    <p><b>Quote:</b><?php echo $quote ?> </p> <br>
    <!-- <form action=" " method="POST"> -->
    <?php echo heading("form using php helper- url- from",3)?>
    <?php echo form_open(); ?>
    Name : <?php echo form_input("name"); ?><br><br>
    Email: <input type="text" name="email"><br><br>
    <?php echo form_submit("Submit","Submit"); ?>
    <?php echo form_close(); ?>
    <!-- </form> -->
    <?php echo heading("url using php helper- url",3)?>
    Base Url: <?php echo base_url();?><br>
    Site Url: <?php echo site_url();?><br>
    Current Url: <?php echo current_url();?><br>
    uri string: <?php echo uri_string();?><br>
    Index page: <?php echo index_page();?><br>
    <?php echo heading("anchor tag",3)?>
    <?php echo anchor('https://google.com', 'Google', 'title=Visit Google')?>
</body>
</html>