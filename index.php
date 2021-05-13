<?php
    session_start();
?>
<?php 
include('databs.php'); 

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweetara</title>
    <!--logo-->
    <link rel="shortcut icon" href="assets/logo.png"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/logo3.png" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">

                <ul class="nav navbar-nav navbar-right">  
                    <li class="active" role="presentation"><a href="index.php">Home </a></li>
                    <li role="presentation"><a href="cart.php">My Cart </a></li>
               
                <?php
                if(isset($_SESSION['username'])){
                    echo "<li role='presentation'><a href='account.php'>Account</a></li>";
                   
                    echo "<li role='presentation'><a href='logout.php'><i class='fas fa-sign-out-alt' ></i></a></li>";
                }
                    
                else {
                   
                    echo "<li role='presentation'><a href='signin.php'>Sign In</a></li>";
                    echo "<li role='presentation'><a href='signup.php'>Sign Up</a></li>";
                 } 
                 ?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotron">
            <h1></h1>
           
        </div>
    </div>
  
    <div class="container site-section" id="welcome">
        <h1>Products</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/MeltedCaramelCake.jpg" target="_blank" data-lightbox="cakes"><img class="img-responsive" src="assets/MeltedCaramelCake.jpg"></a>
                </div>
                <div class="labelitem">
                    <h3>Caramel Melt Cake</h3>
                    <p>Price: P500</p>
                    <p>Chocolate cake with melted salted caramel cake on top </p>
                    
                </div>
                <div class="addcartbtn">
                    <input type="button" name="addcart" value="Add to Cart">
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/wavescake.jpg" target="_blank" data-lightbox="cakes"><img class="img-responsive" src="assets/wavescake.jpg"></a>
                </div>
                <div class="labelitem">
                    <h3>Wavey Cake</h3>
                    <p>Price: P800</p>
                    <p>Nutmeg cake with roested hazelnut, cinnamon and buttercream</p>
                    
                </div>
                <div class="addcartbtn">
                    <input type="button" name="addcart" value="Add to Cart">
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/cake3.jpg" target="_blank" data-lightbox="cakes"><img class="img-responsive" src="assets/cake3.jpg"></a>
                </div>
                <div class="labelitem">
                    <h3>Choco Melty Cake</h3>
                    <p>Price: P600</p>
                    <p>Chocolate cake with melted milky chocolate and top with choco flakes</p>
                    
                </div>
                <div class="addcartbtn">
                    <input type="button" name="addcart" value="Add to Cart">
                </div>
            </div>
          
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/MimosaCake.jpg" target="_blank" data-lightbox="cakes"><img class="img-responsive" src="assets/MimosaCake.jpg"></a>
                </div>
                <div class="labelitem">
                    <h3>Mimosa Cake</h3>
                    <p>Price: P800</p>
                    <p>Sponge cake with orange flavor and champagne buttercream</p>
                    
                </div>
                <div class="addcartbtn">
                    <input type="button" name="addcart" value="Add to Cart">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/cloudycake.jpg" target="_blank" data-lightbox="cakes"><img class="img-responsive" src="assets/cloudycake.jpg"></a>
                </div>
                <div class="labelitem">
                    <h3>Honey Petal Cake</h3>
                    <p>Price: P750</p>
                    <p>Chiffon cake with orange flavor and honey buttercream</p>
                    
                </div>
                <div class="addcartbtn">
                    <input type="button" name="addcart" value="Add to Cart">
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="assets/PinkSunsetCake.jpg" target="_blank" data-lightbox="cakes"><img class="img-responsive" src="assets/PinkSunsetCake.jpg"></a>
                </div>
                <div class="labelitem">
                    <h3>Sunset Cake</h3>
                    <p>Price: P800</p>
                    <p>Red Velvet Cake with chocolate peppermint buttercream</p>
                    
                </div>
                <div class="addcartbtn">
                    <input type="button" name="addcart" value="Add to Cart">
                </div>
            </div>
           
           
           
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">Sweetara</a></h3>
                    <p class="links"><a href="index.php">Home </a><strong> · </strong><a href="cart.php">My Cart </a><strong> · <?php if(isset($_SESSION['username'])){ echo '</strong><a href="account.php">Account</a><strong> </strong></p>'; echo '</strong><a href="logout.php"><i class="fas fa-sign-out-alt" ></i></a><strong> </strong></p>';} else { echo '</strong><a href="#">SignIn/SignUp </a><strong> </strong></p>'; } ?>
                    <p class="company-name">Sweetara © 2021 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Normal Rd.</span>Zamboanga City, Philippines</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> (+63)904-018-2021</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">support_sweetara@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4>About The Shop</h4>
                    <p>The shop's name is intended as or percieved to mean as "Sweet Tara!!" or "Bili tayo cake tara sa Sweetara" interpreted as a friend inviting other friend to enjoy sweet snack time.</p>
                    <p>Baked by Tessa Huff</p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>