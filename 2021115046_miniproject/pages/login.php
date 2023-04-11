<?php
session_start();
?>
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
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'userregistration');
    $b = " ";
    $c = " ";
    $g=" ";
    $userin=" ";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['user'];
    $pass=$_POST['password'];
    $s = "select email, address, city, pincode, phonenumber from usertable where name = '$name'&& password='$pass'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['email']=$row["email"];
            $_SESSION['address']=$row["address"];
            $_SESSION['city']=$row["city"];
            $_SESSION['pincode']=$row["pincode"];
            $_SESSION['phone']=$row["phonenumber"];
        }
    } else {
      echo "0 results";
    }
    if($num==1){
        $_SESSION['username']=$name;

        $b=" you have successfully logged in ";
        header('location:logged.php');
    }else{
        $c="**Login details not found, Please Register/signin and then you can login/signup**";
    }
}
?>
    <section id="header">
        <a href="#"><img src="../img/favicon.png" alt="logo" class="logo" style="width:100px;"></a>
        <div>
            <ul id="menu">
                <li><a href="../index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="about.html"><i class='fas fa-bullhorn'></i> About us</a></li>
                <li><a href="#queries"><i class="fa fa-address-card"></i> Contact</a></li>
                <li><a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                <li><a href="login.php" class="active"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>

            </ul>
        </div>
    </section>
    <div class="login-box">
        <div class ="login">
            <span class="logo"><img src="../img/favicon.png" alt="logo" class="logo"></span>
            <span class="head">Welcome to Kabil Enterprises</span>
            <h2><u>Login / Sign-in</u></h2><span><?php    if (isset( $_SESSION['userin'])) {
            $f ="Dear ". $_SESSION['userin'];echo($f); }; ?></span>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="on">
            <div class="form-group">
                    <label>Username:</label>&nbsp;<i class="fas fa-user"></i>
                    <input type="text" name="user" id="user" class="form-control" placeholder="Enter your User Name" required><br>
                    <span id="avail"></span>
                </div>
                <div class="form-group">
                    <label>Password:</label>&nbsp;<i class="fas fa-key"></i>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <span class="re"><?php echo($b); ?></span>
                <span class="ji"><?php echo($c)?></span><br>
                <div class="form-group">
                    <button type="submit" class="btn-primary" id="pos">Login</button><br>
                    <a href="register.php" class="reg" id="ul">New User? Register Here....</a><br>
                    <p class="hint"><em>If you are new to Kabil enterprises first register and then login...<br>
                    After your successfull login you'll be redirected to the home page</em></p>
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
            <p><strong>Address:</strong><br>Kabil Enterprises, 5, GWT Road Nemili,<br>Sriperumbudur,Chennai-602105</br></p>
            <p><strong>Phone:</strong>+91 9876543210</br>
            <strong>E-mail:</strong>kabilsrinivasan2004@gmail.com</p>
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
