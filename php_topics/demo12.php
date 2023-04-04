<?php
    echo "Date Time function<br>";
    echo "Today is ".date("Y/m/d")."<br>";
    echo "The time is ".date("h:i:sa")."<br>";
    $d=mktime(4, 30, 54, 12, 9, 2019);
    echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
    $d = strtotime("10.30am April 14 1999");
    echo date("Y-m-d h:i:sa", $d)."<br>";
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d)."<br>";
    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d);
    echo "checkdate<br>";
    var_dump(checkdate(03,28,2023));
    echo "<br>date_parse<br>";
    var_dump(date_parse("2002-06-27 12:30:00"));
    echo "<br>";
    var_dump(date_parse("June 27th, 2002, 12:30:00 BST"));
    echo "<br>getdate<br>";
    print_r(getdate());
    echo "<br>gettimeofday<br>";
    print_r(gettimeofday());
    echo "<br>";
    print_r(gettimeofday(true));
    echo "<br>strftime<br>";
    setlocale(LC_TIME, "C");
    echo strftime("%A");
    echo "<br>";
    setlocale(LC_TIME, "fi_FI");
    echo strftime(" in Finnish is %A");
    echo "<br>";
    setlocale(LC_TIME, "fr_FR");
    echo strftime(" in French %A ");
    echo "<br>";
    setlocale(LC_TIME, "de_DE");
    echo strftime(" in German %A");
    echo "<br>";
    setlocale(LC_TIME, "en-in");
    echo strftime("%A");
?>
<html>
    <head>
        <?php
        if(isset($_POST['submit'])){
            $countfiles = count($_FILES['imageToUpload']['name']);
            for($i=0;$i<$countfiles;$i++){
                $filename = $_FILES['imageToUpload']['name'][$i];
                move_uploaded_file($_FILES['imageToUpload']['tmp_name'][$i], 'uploads/'.$filename);
            }
        }
        ?>

        <?php
        $name = $email = $gender= "";
        $nameErr = $emailErr = $genderErr= "";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(empty($_POST['nameField'])){
                $nameErr = "Name is required";
            }else{
                $name = test_input($_POST['nameField']);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }
            if(empty($_POST['emailField'])){
                $emailErr = "Email is required";
            }else{
                $email = test_input($_POST['emailField']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
            if(empty($_POST['genderField'])){
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST['genderField']);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    </head>
    <body>
        <br>
        &copy; 2002-<?php echo date("Y");?>
        <h3>include</h3>
        <?php echo "I have a $color $car."; ?>
        <br><br>
        <?php include 'include.php';
        echo "I have a $color $car.";
        echo "<br>";
        ?>
        <?php include_once 'include.php';
        echo "A $red $fruit.";
        ?>
        <?php //require 'noFileExists.php';
        //echo "I have a $color $car.";?>
        <br>
        <br>
        <h3>File and Image upload</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h4>Select image to upload:</h4>
            <input type="file" name="imageToUpload" id="img" multiple>
            <input type="submit" value="Upload" name="submit">
        </form>
        <br><br>
        <form action="upload1.php" method="post" enctype="multipart/form-data">
            <h4>Select file to upload:</h4>
            <input type="file" name="fileToUpload" id="img" multiple>
            <input type="submit" value="Upload" name="submit">
        </form>
        <br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <h4>Select multiple image to upload:</h4>
            <input type="file" name="imageToUpload[]" id="img" multiple>
            <input type="submit" value="Upload" name="submit">
        </form>
        <br><br>
        <h3>Forms</h3>
        <form action="welcome.php" method="post">
            Name: <input type="text" name="name"><br><br>
            E-mail: <input type="text" name="email"><br><br>
            <input type="submit">
        </form>
        <br><br>
        <h4>form validation </h4>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Name: <input type="text" name="nameField" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span><br><br>
            E-mail: <input type="text" name="emailField" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span><br><br>
            Gender: <input type="radio" name="genderField" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="genderField" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="female">Male
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit">
        </form>
    </body>
</html>
