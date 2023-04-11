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
        <div id="menu">
            <form class="search" role="search" method='POST' action='search.php' style="width:350px;">
                <input class="formdata" type="search" placeholder="Type here to search..." name="data">
                <button class="formsub" value="search" name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <ul id="menu">
                <li><a href="logged.php" ><i class="fa fa-home"></i> Home</a></li>
                <li><a href="shop.php" class="active"><i class="fa fa-plus-square"></i> Shop</a></li>
                <li><a href="cart.php"><i class="fa solid fa-shopping-bag"></i>Cart <?php echo '('.$count.')';?></a></li>
                <li><a href="about.html"><i class='fas fa-bullhorn'></i> About us</a></li>
                <li><a href="#p1"><i class="fas fa-address-card"></i> Contact</a></li>
                <li><a href="logout.php"><i class='fas fa-user-circle'></i> Logout</a></li>
            </ul>
        </div>
    </section>
    <section id="page-header">
        <h2 id="shop">#STAY SAFE FROM MANDOUS CYCLONE</h2>
        <h3 id="ex">On all products, upto 30% off on selected products</h3>

    </section>
    <section id="stock1" class="p1">
        <h2>Products</h2>
        <div class="sto-container">
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/cement/ultratech.jpg" alt="ultratech cement">
                <div class="des">
                    <span>Ultratech</span>
                    <h5>Ultratech 53 grade 50kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.379/bag</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="Ultratech 53 grade 50kg">
                <input type="hidden" name="Price" value="379">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/cement/jsw.jpg" alt="jsw cement">
                <div class="des">
                    <span>JSW</span>
                    <h5>JSW cement 53 grade 50kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.349/bag</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="JSW cement 53 grade 50kg">
                <input type="hidden" name="Price" value="349">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/cement/coromandel.jpg" alt="coromandel cement">
                <div class="des">
                    <span>coromandel</span>
                    <h5>Coromandel 53 grade 50kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.350/bag</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="Coromandel 53 grade 50kg">
                <input type="hidden" name="Price" value="350">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/cement/ramco.jpg" alt="Ramco cement">
                <div class="des">
                    <span>Ramco</span>
                    <h5>Ramco 53 grade 50kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.382/bag</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="Ramco 53 grade 50kg">
                <input type="hidden" name="Price" value="382">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/paint/jsw/pixa.jpg" alt="jsw pixa paint">
                <div class="des">
                    <span>JSW</span>
                    <h5>JSW 1litre pixa paint box </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @ Rs.185/box</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="JSW 1litre pixa paint box ">
                <input type="hidden" name="Price" value="185">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/paint/jsw/aurus.jpg" alt="jsw aurus paint">
                <div class="des">
                    <span>JSW</span>
                    <h5>JSW 1litre aurus exterior paint box </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @ Rs.295/box</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="JSW 1litre aurus exterior paint box ">
                <input type="hidden" name="Price" value="295">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/paint/jsw/antifungal.jpg" alt="jsw antigungal paint">
                <div class="des">
                    <span>JSW</span>
                    <h5>JSW 1litre antifungal exterior paint box </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @ Rs.375/box</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="JSW 1litre antifungal exterior paint box">
                <input type="hidden" name="Price" value="375">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/paint/jsw/halo.jpg" alt="jsw halo paint">
                <div class="des">
                    <span>JSW</span>
                    <h5>JSW 1litre halo majestic interior silk paint box </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @ Rs.625/box</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="JSW 1litre halo majestic interior silk paint box">
                <input type="hidden" name="Price" value="625">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/tiles/kajaria.jpg" alt="kajaria tiles">
                <div class="des">
                    <span>Kajaria</span>
                    <h5>kajaria Tiles India's No.1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Starts @Rs.45/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="kajaria Tiles India's No.1">
                <input type="hidden" name="Price" value="45">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/tiles/agl.jpg" alt="agl tiles">
                <div class="des">
                    <span>AGL</span>
                    <h5>AGL Tiles India's No.2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Starts @Rs.30/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="AGL Tiles India's No.2">
                <input type="hidden" name="Price" value="30">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/tiles/bajaj.jpg" alt="bajaj tiles">
                <div class="des">
                    <span>BAJAJ</span>
                    <h5>BAJAJ Tiles India's No.3</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Starts @Rs.35/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="BAJAJ Tiles India's No.3">
                <input type="hidden" name="Price" value="35">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/tiles/orient.jpg" alt="orient tiles">
                <div class="des">
                    <span>ORIENT BELL</span>
                    <h5>ORIENT BELL Tiles</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Starts @Rs.28/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="ORIENT BELL Tiles">
                <input type="hidden" name="Price" value="28">
            </form> 
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/plywood/greenply.jpg" alt="greenply plywood">
                <div class="des">
                    <span>Green Ply</span>
                    <h5>Greenply Normal ply wood (4-25mm) economy</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @Rs.80/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="Greenply Normal ply wood">
                <input type="hidden" name="Price" value="80">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/plywood/century.jpg" alt="Century plywood">
                <div class="des">
                    <span>Century Ply</span>
                    <h5>Century Normal ply wood (4-25mm) economy</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @Rs.75/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="Century Normal ply wood">
                <input type="hidden" name="Price" value="75">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/plywood/national.jpg" alt="national plywood">
                <div class="des">
                    <span>National Ply</span>
                    <h5>National Normal ply wood (4-25mm) economy</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @Rs.68/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="National Normal ply wood">
                <input type="hidden" name="Price" value="68">
            </form>
            </div>
            <div class="sto">
            <form  method="post" action="add.php">
                <img src="../img/plywood/kitply.jpg" alt="kitply plywood">
                <div class="des">
                    <span>Kitply</span>
                    <h5>Kitply Normal ply wood (4-25mm) economy</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>starts @Rs.58/sq.feet</h4> 
                </div>
                <button type="submit" name="cart" class="cart"><i class="fal fa-shopping-cart cart"></i></button>
                <input type="hidden" name="item" value="Kitply Normal ply wood ">
                <input type="hidden" name="Price" value="58">
            </form>
            </div>
        </div>
    </section>
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
            <p id="con">Contact</p>
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

    <script src="script.js"></script>
</body>
</html>