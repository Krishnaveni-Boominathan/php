<?php
    session_start();
?>
<html>
    <head>
       
    </head>
    <body>
        <?php
        if(isset($_SESSION['id'])){
            if($_SESSION['id'] == 1){
                echo "You are logged in as user 1";
            }
            echo "<br> <form action='uploadform.php' method='post'>
                            <input type='file' name='file'>
                            <input type='submit' name='submit'>
                        </form>";
        }else{
            echo "You are logged out";
            echo "<form action='signupform.php' method='post'>
                    <input type='text' name='name' placeholder='Name'>
                    <input type='password' name='passeord' placeholder='Password'>
                    <input type='submit' name='submitSignup'>
                  </form>";
        }
        ?>
        <form action="loginform.php" method="post">
            <input type="submit" name="submitLogin" value="Login">
        </form>
        <form action="logoutform.php" method="post">
            <input type="submit" name="submitLogout" value="Logout">
        </form>
        <br>
        <?php  
            $nameErr = "";  
            $emailErr = "";  
            $genderErr = "";  
            $numErr = "";  
            $name = "";  
            $email = "";  
            $gender = "";  
            $comment = "";  
            $num = "";  
            $hobbies = $_POST['hobbies'];
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            if (empty($_POST["name"])) {  
                $nameErr = "Name Field is required";  
            } else {  
                $name = test_input($_POST["name"]);  
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {  
                $nameErr = "Only letters and white space allowed";  
                }  
            }  
                if (empty($_POST["email"])) {  
                $emailErr = "Email field is required";  
            } else {  
                $email = test_input($_POST["email"]);  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
                }  
            }  
            if (empty($_POST["num"])) {  
                $numErr = "Phone Number is required";  
            } else {  
                $num = test_input($_POST["num"]);  
                if (!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/",$num)) {  
                $numErr = "Invalid Number";  
                }  
            }  
            if (empty($_POST["comment"])) {  
                $comment = "";  
            } else {  
                $comment = test_input($_POST["comment"]);  
            }  
            if (empty($_POST["gender"])) {  
                $genderErr = "Gender is required";  
            } else {  
                $gender = test_input($_POST["gender"]);  
            }  
            if(!isset($_POST['hobbies'])){
                $count = count($hobbies);
                for($i=0;$i<$count;$i++){
                    print_r($hobbies[$i]." ");
                }
            }
            }  
            function test_input($data) {  
            $data = trim($data);  
            $data = stripslashes($data);  
            $data = htmlspecialchars($data);  
            return $data;  
            }  
        ?>  
            <br><br>

            <h3>Form</h3>  
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
                <b> Enter Name: </b> <input type="text" name="name" value="<?php echo $name;?>">  
                <span class="error"> *  <?php echo $nameErr;?> </span>  
                <br> <br>  
                <b> Enter E-mail: </b> <input type="text" name="email" value="<?php echo $email;?>">  
                <span class="error"> * <?php echo $emailErr;?> </span>  
                <br> <br>  
                <b> Enter Number: </b> <input type="text" name="num" value="<?php echo $num;?>">  
                <span class="error"> * <?php echo $numErr;?> </span>  
                <br> <br>  
                <b> Message: </b> <textarea name="comment" rows="5" cols="40"> <?php echo $comment;?> </textarea>  
                <br> <br>  
                <b> Select Gender: </b>  
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female  
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male  
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other    
                <span class="error"> * <?php echo $genderErr;?> </span>  
                <br> <br> 
                <select name="hobbies[]" multiple="multiple">
                    <option value="">Select...</option>
                    <option value="p">Painting</option>
                    <option value="s">Singing</option>
                    <option value="d">Dancing</option>
                </select>
                <input type="submit" name="submit" value="Register ">    
            </form>  
            <?php  
                echo "<h2> Your Input: </h2>";  
                echo $name;  
                echo "<br>";  
                echo $email;  
                echo "<br>";  
                echo $num;  
                echo "<br>";  
                echo $comment;  
                echo "<br>";  
                echo $gender;  
            ?> 
    </body>
</html>