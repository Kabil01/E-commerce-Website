<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabil Enterprises</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
<?php 
    $count=0;
    if(isset($_SESSION['cart']))
    {
    $count=count($_SESSION['cart']);
    }
    ?>
    <section id="header">
        <a href="#"><img src="../img/favicon.png" alt="logo" class="logo" style="width:100px;"></a>
        <div>
            <ul id="menu">
                <li><a href="logged.php" ><i class="fa fa-home"></i> Home</a></li>
                <li><a href="shop.php"><i class="fa fa-plus-square"></i> Shop</a></li>
                <li><a href="cart.php" class="active"><i class="far fa-shopping-bag"></i> cart</a></li>
                <li><a href="about.html"><i class='fas fa-bullhorn'></i> About us</a></li>
                <li><a href="#p1"><i class="fa fa-address-card"></i> Contact</a></li>
                <li><a href="logout.php"><i class='fas fa-user-circle'></i> Logout</a></li>
            </ul>
        </div>
    </section>
    <section id="cart" class="p1">
        <h1>MY CART</h1><hr>
        <table class="table">
            <thead class="text-center">
                <tr>
                <th scope="col">Remove</th>
                <th scope="col">S.No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price per<br>sq.feet/unit</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key=> $value)
                        {
                            $s = $key+1;
                            
                            echo "
                                <tr>
                                    <td>
                                        <form action='add.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'><i class='far fa-times-circle'></i></button>
                                            <input type='hidden' name='item' value='$value[item]'>
                                        </form>
                                    </td>
                                    <td>$s</td>
                                    <td>$value[item]</td>
                                    <td>Rs.$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td><input class='text-center iquantity' onchange='subTotal()'type='number' value='$value[Quantity]' min='1'></td>
                                    <td class='any' name='totally'></td>

                                </tr>
                                ";
                        }
                    }
                ?>

            </tbody>
        </table>
        <br>
        <hr>
        
    </section>
    <section id="cart-add" class="section-p1">
        <div id="subtotal">
            <h3>Cart Total:</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td><h5  id='total'></h5></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong><span id='tota' name="totaly"></span></strong></td>
                    <input type="hidden" id="tot" value="" name="total">
                </tr>
                </table>
            <form action="final.php" method="post">
                <Button type="submit" class="formsuba " id="normal" >Proceed to checkout</Bhtton>
            </form>
        </div>
    </section>
    <section id="cart" class="p1">
        <div id="subtotals">
        <?php echo

            ("<table><thead<tr><th colspan='2'>Your Profile:</th></tr></thead><tbody><tr><td rowspan='4'>Your address:</td><td>".$_SESSION['address'].
            "</td><tr></tr><td>".$_SESSION['city']."</td></tr><tr><td>".$_SESSION['pincode']."</td></tr>
                <tr><td>Your email:</td><td>".$_SESSION['email']."</td></tr><td>
                Your phone number</td><td>".$_SESSION['phone']."</td></tr></tbody></table>");?>
        </div>
    </section>

<script>
var a=0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var any = document.getElementsByClassName('any');
var total = document.getElementById('total');
function subTotal(){
    var a = 0;
    for(i=0;i<iprice.length;i++){
        any[i].innerText = 'Rs.'+(iprice[i].value)*(iquantity[i].value);
        a = a+(iprice[i].value)*(iquantity[i].value);
    }
    total.innerText = a;
    document.getElementById('total').innerHTML="Rs."+a+"/-";
    document.getElementById('tota').innerHTML="Rs."+a+"/-";
    document.getElementById('tot').value=a;
    console.log(a);
    var b = a.toString();
    document.cookie = "total="+b;
}
subTotal();

</script>

</body>
</html>

