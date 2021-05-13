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
                    <li class="presentation" role="presentation"><a href="index.php">Home </a></li>
                    <li role="presentation"><a href="cart.php">My Cart </a></li>
               
                <?php
                if(isset($_SESSION['username'])){
                    echo "<li role='active'><a href='account.php'><i class='fas fa-user' ></i></a></li>";
                   
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
    <div class="container site-section cart-section" id="welcome">
        
        <div class="rowcart">
        <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
                <div class="col-md-12">
		

		<div  class="panel panel-default">
		
			<div class="panel-body">

				<form action="#" method="post" class="form-horizontal" id="#">
					<fieldset>
                    <div class="box box-solid">
	        			<div class="box-body">
	        				<div class="col-sm-3">
	        					<img src="" width="100%">
	        				</div>
	        				<div class="col-sm-9">
	        					<div style="margin-left:-20rem" class="row">
	        						<div style="text-align:left;" class="col-sm-3">
                                        <h4>Username:</h4>
	        							<h4>Name:</h4>
	        							<h4>Email:</h4>
	        							<h4>Phone Number:</h4>
	        							<h4>Address:</h4>
	        						</div>
	        						<div class="col-sm-9">
	        							<h4>
	        								<span class="pull-right">
	        									<a href="#edit" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
	        								</span>
	        							</h4>
	        							<h4> <?php echo $_SESSION['username']; ?></h4>
	        							<h4> </h4>
	        							<h4></h4>
	        							<h4> </h4>
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>

                                </fieldset>
                            </form>

                        </div> <!--end of panel-body -->		

                    </div> <!--end of panel -->		
                </div> <!--end of col-md-12 -->	
            </div> <!--end of row-->
            <img style="width:15rem;height:15rem;" src="assets/logo.png">
            <span class="pull">
	        	<a href="#edit" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit Profile Picture</a>
	        </span>
                        </table>
                    </div>
                    
                </div>
                
	        		
	        		<div class="box box-solid">
	        			<div class="box-header with-border">
	        				<h4 class="box-title"><i class="fa fa-calendar"></i> <b>My Order</b></h4>
	        			</div>
	        			<div class="box-body">
	        				<table class="table table-bordered" id="example1">
	        					<thead>
	        						<th class="hidden"></th>
	        						<th>Date</th>
	        						<th>Order Number</th>
	        						<th>Amount</th>
                                    <th>Status</th>
	        						<th>Full Details</th>
	        					</thead>
	        					<tbody>
	        					
	        									<tr>
	        										<td class='hidden'></td>
	        										<td></td>
	        										<td></td>
	        										<td>P </td>
                                                    <td></td>
	        										<td><button class='btn btn-sm btn-flat btn-info transact' data-id="#"><i class='fas fa-eye'></i> View</button></td>
	        									</tr>
	        								
	        						

	        					</tbody>
	        				</table>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="col-sm-3">
	        		
	        	</div>
	        </div>
	      </section>
	     
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