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
    <title>Sweetara Cart</title>
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
                    <li role="presentation"><a href="index.php">Home </a></li>
                    <li class="active" role="presentation"><a href="cart.php">My Cart </a></li>
                <?php
                if (isset($_SESSION["username"])) {
                    echo "<li role='presentation'><a href='account.php'><i class='fas fa-user' ></i></a></li>";
                    echo "<li role='presentation'><a href='logout.php'><i class='fas fa-sign-out-alt'></i></a></li>";
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
    
    <div class="container site-section cart-section" id="welcome">
        
        <div class="rowcart">
            <h1>Your Cart is Empty</h1> <div class="addcartbtn">
                <input type="button" name="addcart" value="Shop Now!">
            </div>
                
            
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">Sweetara</a></h3>
                    <p class="links"><a href="index.php">Home </a><strong> ?? </strong><a href="cart.php">My Cart </a><strong> ?? <?php if(isset($_SESSION['username'])){ echo '</strong><a href="account.php">Account</a><strong> </strong></p>'; echo '</strong><a href="logout.php"><i class="fas fa-sign-out-alt" ></i></a><strong> </strong></p>';} else { echo '</strong><a href="#">SignIn/SignUp </a><strong> </strong></p>'; } ?>
                    <p class="company-name">Sweetara ?? 2021 </p>
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
                    <p>The shop's name is intended as or percieved to mean as "Sweet Tara!!" or "Bili tayo cake tara sa Sweetara" interpreted as a friend inviting other friend to enjoy sweet snack time .</p>
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