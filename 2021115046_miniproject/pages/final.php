
<?php

        session_start();
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'userregistration');
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_SESSION['username'];
        $email=$_SESSION['email'];
        $address=$_SESSION['address'];
        $city=$_SESSION['city'];
        $pincode=$_SESSION['pincode'];
        $phonenumber=$_SESSION['phone'];
        $total=$_COOKIE['total'];
        $productin=count($_SESSION['cart']);
        $s = "select * from orders where  username= '$name'";
        $result=mysqli_query($con,$s);
        $num=mysqli_num_rows($result);
        $reg="insert into orders(username,email,address,city,pincode,phonenumber,total,noofproduct ) values ('$name','$email','$address','$city',$pincode,'$phonenumber','$total','$productin')";
        mysqli_query($con,$reg);
        echo("<script>alert('Submitted successfully, Our manager will contact you for order confirmation with in 60 minutes.Thank You for Shopping');
        window.location.href='cart.php';</script>");
        }

?>