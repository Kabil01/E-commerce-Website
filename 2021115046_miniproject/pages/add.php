<?php

session_start();


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST["cart"])){
        if(isset($_SESSION['cart'])){
            $myitems = array_column(($_SESSION['cart']),'item');
            if(in_array($_POST['item'],$myitems)){
                echo "<script>
                alert('Already added into your cart');
                window.location.href='shop.php';
                </script>";
            }
            else{
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('item'=>$_POST['item'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo "<script>
                    //alert('Added into your cart');
                    window.location.href='shop.php';
                    </script>";
                }

        }
        else{
            $_SESSION['cart'][0] = array('item'=>$_POST['item'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>
                alert('Added to the cart');
                window.location.href='shop.php';
                </script>";
        }
    }
    if(isset($_POST['Remove_Item'])){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['item'] == $_POST['item'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                    window.location.href = 'cart.php';
                </script>";
            }
        }
    }
}
?>