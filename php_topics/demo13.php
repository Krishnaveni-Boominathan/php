<?php
echo "Get form<br><br>";
?>
<html>
    <head>
        <!-- <link rel="stylesheet" href="style.css" > -->
    </head>
    <body>
        <form action="get.php" method="get">
            <label>Name</label>
            <input type="text" name="name"><br><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit">
        </form>
        <br>

        <h4>Post form</h4>
        <form action="post.php" method="post" >
            <label>Name</label>
            <input type="text" name="name"><br><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit">
        </form>
        <br><br>

        <form action="login.php" method="GET">
            <h3>LOGIN</h3>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname"><br><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
        </form>                      
            <?php  
                $nameErr1 = $emailErr1 = $genderErr1 = $numErr1 = $passErr1 = $addErr1 =  $hobbErr1= $imgErr1= $dateErr1=""; 
                $name1 =  $email1 =   $gender1 =   $pass1 =  $num1 = $add1= $hobb1= $img1 = $date1="";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                if (empty($_POST["n"])) {  
                    $nameErr1 = "Name Field is required";  
                } else {  
                    $name1 = form_input($_POST["n"]);  
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name1)) {  
                    $nameErr1 = "Only letters and white space allowed";  
                    }  
                }  
                    if (empty($_POST["e"])) {  
                    $emailErr1 = "Email field is required";  
                } else {  
                    $email1 = form_input($_POST["e"]);  
                    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {  
                    $emailErr1 = "Invalid email format";  
                    }  
                }  
                if (empty($_POST["m"])) {  
                    $numErr1 = "Phone Number is required";  
                } else {  
                    $num1 = form_input($_POST["m"]);  
                    if (!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/",$num1)) {  
                    $numErr1 = "Invalid Number";  
                    }  
                }  
                if (empty($_POST["p"])) {  
                    $passErr1 = "";  
                } else {  
                    $pass1 = form_input($_POST["p"]);  
                }  
                if (empty($_POST["a"])) {  
                    $addErr1 = "";  
                } else {  
                    $add1 = form_input($_POST["a"]);  
                } 
                if (empty($_POST["g"])) {  
                    $genderErr1 = "Gender is required";  
                } else {  
                    $gender1 = $_POST["g"];  
                }  
                $hobbies = $_POST["hobb"];
                if (empty($hobbies)) {  
                    $hobbErr1 = "Hobbies is required";  
                } else {  
                    $hobb1 = ($_POST["hobb"]);  
                    foreach ($hobb1 as $key => $value) {
                        $display= "$value\t";
                    } 
                } 
                if (empty($_POST["date"])) {  
                    $dateErr1 = "required";  
                } else {  
                    $date1 = ($_POST["date"]);  
                } 
                // if (empty($_POST["pic"])) {  
                //     $imgErr = "";  
                // } else {  
                //     $img = ($_POST["pic"]);  
                // } 
                $file = "uploads/". $_FILES["pic"]["name"];
                if(move_uploaded_file($_FILES["pic"]["tmp_name"], $file)){
                    $img = "<img src=".$file."height=100 width=200>";
                }
                }  
                function form_input($data) {  
                $data = trim($data);  
                $data = stripslashes($data);  
                $data = htmlspecialchars($data);  
                return $data;  
                }  
            ?>  

            <h1> Form</h1>  
            <form method="post" enctype="multipart/form-data" action =''>  
                <table>  
                <tr>  
                    <td width="159"> <b> Enter your Name </b> </td>  
                    <td width="218">  
                    <input type="text" placeholder="Enter name" name = "n"  pattern="[a-z A-Z]*" required > </td>  
                </tr>  
                <tr>  
                    <td> <b> Enter your Email </b> </td>  
                    <td> <input type="email" name="e" placeholder= "Enter Email" > </td>  
                </tr>  
                <tr>  
                    <td> <b> Enter your Password </b> </td>  
                    <td> <input type="password" name="p" placeholder=" Enter Password" > </td>  
                </tr>  
                <tr>  
                    <td> <b> Enter your Address </b> </td>  
                    <td> <textarea name="a" placeholder="Enter Address"></textarea> </td>  
                </tr>  
                <tr>  
                    <td> <b> Enter your Mobile Number </b> </td>  
                    <td> <input type="text"  name="m"  placeholder=" Enter number" > </td>  
                </tr>  
                <tr>  
                    <td height="23"> <b> Select your Gender </b> </td>  
                    <td>  
                    Male <input type="radio" name="g" value="male">  
                    Female <input type="radio" name="g" value="female">  
                    </td>  
                </tr>  
                <tr>  
                    <td> <b> Choose your Hobbies </b> </td>  
                    <td>  
                        Cricket <input type="checkbox" value="cricket" name="hobb[]">  
                        Singing <input type="checkbox" value="singing" name="hobb[]">  
                        Dancing <input type="checkbox" value="dancing" name="hobb[]">  
                    </td>  
                </tr>  
                <tr>  
                    <td> <b> Select your Profile Pic </b> </td>  
                    <td> <input type="file" name="pic"/> </td>  
                </tr>  
                <tr>  
                    <td> <b> Select your Date of Birth </b> </td>  
                    <td><input type="date" name="date"></td>
                </tr>  
                <tr>  
                    <td colspan="2">  
                    <input type ="submit" name="save" value="Register">  
                    <input type="reset" value="Reset">  
                    </td>  
                </tr>  
                </table>  
            </form> 

            <?php  
                echo "<h2> Your Input: </h2>";  
                echo $name1;  
                echo "<br>";  
                echo $email1;
                echo "<br>";  
                echo $pass1;  
                echo "<br>";
                echo $add1;  
                echo "<br>";
                echo $num1;  
                echo "<br>";  
                echo $gender1; 
                echo "<br>" ;
                echo $display1;
                echo "<br>";
                echo $img1;
                echo "<br>";
                echo $date1;        
            ?> 
    </body>
</html>