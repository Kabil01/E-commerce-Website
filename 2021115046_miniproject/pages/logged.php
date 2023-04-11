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
    <section id="header">
        <a href="#"><img src="../img/favicon.png" alt="logo" class="logo" style="width:100px;"></a>
        <div>
            <ul id="menu">
                <li><a href="logged.php" class="active"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="shop.php"><i class="fa fa-plus-square"></i> Shop</a></li>
                <li><a href="cart.php"><i class="far fa-shopping-bag"></i> Cart</a></li>
                <li><a href="about.html"><i class='fas fa-bullhorn'></i> About us</a></li>
                <li><a href="#p1"><i class="fa fa-address-card"></i> Contact</a></li>
                <li><a href="logout.php"><i class='fas fa-user-circle'></i> Logout</a></li>
            </ul>
        </div>
    </section>        
    <section id="home">
    <?php echo("<p id='marq'>Dear ".$_SESSION['username'].", Welcome to our official website.&nbsp;&nbsp;-Logged in Successfully. To place Order go to shop.</p>");?>
        <h1>KABIL ENTERPRISES</h1>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to our Website!!!  Kabil Enterprises is a startup company<br> in India, especially opened in Tamilnadu,
        as it was suggested by<br> our Honourable <strong><u>Chief Minister Thiru M.K.Stalin</u></strong></p>
        <h4><u>AUTHORISED DEALER FOR</u></h4><ul><li>JSW,</li><li>ULTRATECH,</li><li>TATA STEELS,</li><li>RAMCO</li><li>BERGER</li><li>NIPPON etc..</li></ul>
        <h1>Super Saving Deals</h1>
        <h3>On all products, upto 30% off on selected items</h3>
        <p>A convenience store and a whole lot more.</p>
        <button >Shop Now</button>

    </section>
    <section id="positive" class="p1">
        <div class="box">
            <img src="../img/fea/sup.jpg" width="100" height="100" alt="24/7support">
            <h6>24/7 support</h6>
        </div>
        <div class="box">
            <img src="../img/fea/on.png" width="100" height="100" alt="order in online">
            <h6>Order in Online</h6>
        </div>
        <div class="box">
            <img src="../img/fea/cus.png" width="100" height="100" alt="customer care">
            <h6><abbr title="Best customer care">Customer care</abbr></h6>
        </div>
        <div class="box">
            <img src="../img/fea/ce.jfif" width="100" height="100" alt="Certified sellet">
            <h6>Certified seller</h6>
        </div>
        <div class="box">
            <img src="../img/fea/ship.png" width="100" height="100" alt="free shipping">
            <h6><abbr title="*within 25km range">Free shipping</abbr></h6>
        </div>
        <div class="box">
            <img src="../img/fea/exc.png" width="100" height="100" alt="Exclusive offer">
            <h6><abbr title="">Exclusive offer</abbr></h6>
        </div>
        <div class="box">
            <img src="../img/fea/ext.webp" width="100" height="100" alt="Extra bonus">
            <h6><abbr title="*Depending on purchase">Extra bonus</abbr></h6>
        </div>
        <div class="box">
            <img src="../img/fea/we.png" width="100" height="100" alt="best company">
            <h6><abbr title="*One of the best company in hardware">The Best</abbr></h6>
        </div>
    </section>
    <marquee width="100%" direction="left" height="50px" scrollamount="10" id="marq"s><?php if (isset($_SESSION['username'])){
            echo("<p id = 'marq'>Dear ".$_SESSION['username'].", To place Order go to shop.</p>");
        }?></marquee>
    <section id="stock1" class="p1">
        <h2>Current product Offers</h2>
        <p>Monsoon Offer</p>
        <p>To place order go to cart and then order</p>
        <div class="sto-container">
            <div class="sto">
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

            </div>
            <div class="sto">
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
                
            </div>
            <div class="sto">
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
            </div>
            <div class="sto">
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
            </div>
            <div class="sto">
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
                
            </div>
            <div class="sto">
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

            </div>
            <div class="sto">
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
                
            </div>
            <div class="sto">
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
            </div>
        </div>
    </section>
    <section id="banner" class="m1">
        <h4>Buy more Save more</h4>
        <h2>Up to <span>35% discount </span>on all products</h2>
        <button class="normal">Know More</button>
    </section>
    <section id="stock1" class="p1">
        <h2>Upcoming Product launches in our store</h2>
        <p>To have A to Z products for construction sites and we are partnering with leading tiles and plywood companies</p>
        <div class="sto-container">
            <div class="sto">
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
            </div>
            <div class="sto">
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
            </div>
            <div class="sto">
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
            </div>
            <div class="sto">
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
            </div>
            <div class="sto">
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
                
            </div>
            <div class="sto">
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
                
            </div>
            <div class="sto">
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
                
            </div>
            <div class="sto">
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
               
            </div>
        </div>
    </section>
    <section id="extra" class="p1">
        <div class="banner-box">
            <h4>Crazy Deals Coming Soon!!!</h4>
        </div>
        <div class="banner-box banner-box2">
            <h4>Diwali Offers Coming soon!!!</h4>
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
            <a href="login.php">create new account?</a>
            <a href="logged.php">Home</a>
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