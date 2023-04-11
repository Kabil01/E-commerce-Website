<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration and login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/supporting.css">
</head>
<body>
    <?php
        session_start();
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'userregistration');
        $a=" ";
        $z=" ";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['user'];
        $pass=$_POST['password'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $phone=$_POST['phone'];
        $s = "select * from usertable where name = '$name'";
        $result=mysqli_query($con,$s);
        $num=mysqli_num_rows($result);
        if($num==1){
            $a="**Username already exists**";
        }else{
            $_SESSION['username']=$name;
            $_SESSION['email']=$email;
            $_SESSION['address']=$address;
            $_SESSION['city']=$city;
            $_SESSION['pincode']=$pincode;
            $_SESSION['phone']=$phone;
            $reg="insert into usertable(name,password,email,address,city,pincode,phonenumber) values ('$name','$pass','$email','$address','$city','$pincode','$phonenumber')";
            mysqli_query($con,$reg);
            $z='Registered successfully';
            header('location:logged.php');
        }}
    ?>
    <section id="header">
        <a href="#"><img src="../img/favicon.png" alt="logo" class="logo" style="width:100px;"></a>
        <div>
            <ul id="menu">
                <li><a href="../index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="about.html"><i class='fas fa-bullhorn'></i> About us</a></li>
                <li><a href="#queries"><i class="fa fa-address-card"></i> Contact</a></li>
                <li><a href="register.php" class="active"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
            </ul>
        </div>
    </section>
    <div class="login-box">
        <div class="login" >
            <span class="logo"><img src="../img/favicon.png" alt="logo" class="logo"></span>
            <span class="head">Welcome to Kabil Enterprises</span>
            <h2><u>Register / sign-up</u></h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="on">
                <div class="form-group">
                    <label>Username:</label>&nbsp;<i class="fas fa-user"></i>
                    <input type="text" name="user" id="user" class="form-control" placeholder="Enter your User Name" minlength="3" required><br>
                    <span id="avail"></span>
                </div>
                <div class="form-group">
                    <label>Password:</label>&nbsp;<i class="fas fa-key"></i>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" minlength='6' required>
                </div>
                <div class="form-group">
                    <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</label>&nbsp;<i class="fa fa-envelope"></i>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" maxlength="50" minlength="10" required>
                </div>
                <div class="form-group">
                    <label>Address:</label>&nbsp;<i class="fa fa-address-card"></i>
                    <input type="text" name="address" class="form-control" placeholder="Enter your Address" maxlength="200" minlength="20" required>
                </div>
                <div class="form-group">
                    <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label>&nbsp;<i class="fas fa-city"></i>
                    <input type="text" name="city" class="form-control" placeholder="Enter your City" maxlength="50" minlength="3" required>
                </div>
                <div class="form-group">
                    <label>Pincode:</label>&nbsp;<i class="fas fa-map-pin"></i>
                    <input type="number" name="pincode" class="form-control" placeholder="123456" maxlength="7" minlenghth="5"required>
                </div>
                <div class="form-group">
                    <label>Phone :</label>&nbsp;<i class="fa fa-phone"></i>
                    <input type="number" name="phone" class="form-control" placeholder="Enter your phonenumber" maxlength="10" minlength="9" required>
                </div>
                <div class="form-group">
                    <span class="re"><?php echo($z); ?></span>
                    <span class="ji"><?php echo($a); ?></span><br>
                    <button type="submit" class="btn btn-primary">Register</button><br>
                    <a href="login.php" class="reg" id="ul">Already registered? Login here...</a><br>
                    <span class="hint"><em>After your successfull registration you'll be redirected to the login page</em></span>
                </div>
            </form>
        </div>
    </div>
    <section id="queries">
        <div class="sendquery">
            <h4><u>Contact Mail:</u></h4>
            <p>For any queries or price negotiation send mail or any suggestions</p>
            <a href="mailto:kabilsrinivasan2004@gmail.com">Click me to send mail</a>
        </div>
    </section>
    <footer class="p1" id="p1">
        <div class="col">
            <img src="../img/favicon.png" alt="logo">
            <h4>Contact</h4>
            <p><strong>Address:</strong><br>Kabil Enterprises, 5, GWT Road Nemili,<br>Sriperumbudur,Chennai-602105</p>
            <p><strong>Phone:</strong>+91 9876543210</p>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <a href="register.php">create new account?</a>
            <a href="#">Terms and Conditions</a>
            <a href="#p1">Contact Us</a><br>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                <i class="fab fa-facebook"></i>
                <a href="https://www.instagram.com/itsme_kabil/?hl=en"><i class="fab fa-instagram"></i></a>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-pinterest-p"></i>
                <a href="https://www.youtube.com/channel/UCHULth9NOAcIDS2n4JSdEKw"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright"><p>&copy;2022 Kabil Enterprises Limited</p></div>
    </footer>
</body>
</html>
