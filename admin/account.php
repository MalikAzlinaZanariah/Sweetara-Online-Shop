<?php 

session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweetara Admin Account </title>
    
    <link rel="shortcut icon" href="assets/logo.png"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/logo3.png" id="logo">Admin</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li  role="presentation"><a href="order.php">Order Management</a></li>
                    <li role="presentation"><a href="product.php">Product Management</a></li>
                    <li role="presentation"><a href="user.php">User Management</a></li>
                    <li class="active" role="presentation"><a href="account.php"><i class="fas fa-user" ></i></a></li>
                    <li role="presentation"><a href="signout.php"><i class="fas fa-sign-out-alt" ></i></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotrons">
            <h2>Account
                <span style="margin-left: 30px;">
		   	     <i class="fa fa-wrench" data-toggle="modal" data-target="#myModal"></i></span>
            </h2>
            
            <table id="example" class="display" style="width:100%">
            <div class="row">
	<div class="col-md-12">
		

		<div class="panel panel-default">
		
			<div class="panel-body">

				

				<form action="#" method="post" class="form-horizontal" id="#">
					<fieldset>
						<legend>Change Username</legend>

						<div class="changeUsenrameMessages"></div>			

						<div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Username</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="username" name="username" placeholder="Usename" value="Sweetara Admin"/>
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					    	<input type="hidden" name="user_id" id="user_id" value="<?php echo $result['user_id'] ?>"end of > 
					      <button type="submit" class="btn btn-success" data-loading-text="Loading..." id="changeUsernameBtn"> Save Changes </button>
					    </div>
					  </div>
					</fieldset>
				</form>

				<form action="actions/changePassword.php" method="post" class="form-horizontal" id="changePasswordForm">
					<fieldset>
						<legend>Change Password</legend>

						<div class="changePasswordMessages"></div>

						<div class="form-group">
					    <label for="password" class="col-sm-2 control-label">Current Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="password" name="password" placeholder="Current Password">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="npassword" class="col-sm-2 control-label">New password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="npassword" name="npassword" placeholder="New Password">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="cpassword" class="col-sm-2 control-label">Confirm Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					    	<input type="hidden" name="user_id" id="user_id" value="<?php echo $result['user_id'] ?>"end of > 
					      <button type="submit" class="btn btn-primary"></i> Save Changes </button>
					      
					    </div>
					  </div>


					</fieldset>
				</form>

			</div> <!--end of panel-body -->		

		</div> <!--end of panel -->		
	</div> <!--end of col-md-12 -->	
</div> <!--end of row-->
            </table>
        </div>
    </div>
  
    <footer>
        <div class="container">
           
                    <p class="company-name">Sweetara © 2021 </p>
               
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>