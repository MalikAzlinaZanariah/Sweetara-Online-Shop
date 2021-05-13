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
    <title>Sweetara Admin User </title>
    <!--logo-->
    <link rel="shortcut icon" href="assets/logo.png"/>
    <!---table-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

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
                    <li  role="presentation"><a href="product.php">Product Management</a></li>
                    <li class="active" role="presentation"><a href="user.html">User Management</a></li>
                    <li role="presentation"><a href="account.php"><i class="fas fa-user" ></i></a></li>
                    <li role="presentation"><a href="signout.php"><i class="fas fa-sign-out-alt" ></i></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotrons">
            <h2>User
                <span style="margin-left: 30px;">
		   	     <a href="#"><i class="fa fa-plus" data-toggle="modal" data-target="#myModal"></i></a></span>
            </h2>
            
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Profile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                    </tr>
                  
                </tbody>
                <tfoot>
                    <tr>
                      
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
     <!---Add in modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Add User</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">


        	<div class="form-group">
        		<label>Image</label>
        		<input type="file" name="image" class="form-control" placeholder="Insert Profile Picture.....">
        	</div>

        	<div class="form-group">
        		<label>Username</label>
        		<input type="text" name="username" class="form-control" placeholder="Enter Userame.....">
        	</div>
            <div class="form-group">
        		<label>Name</label>
        		<input type="text" name="name" class="form-control" placeholder="Enter Name.....">
        	</div>

        	<div class="form-group">
        		<label>Email</label>
        		<input type="email" name="email" class="form-control" placeholder="Enter Email.....">
        	</div>

        	<div class="form-group">
        		<label>Address</label>
        		<input type="text" name="address" class="form-control" placeholder="Enter Address.....">
        	</div>

        	<div class="form-group">
        		<label>Phone Number</label>
        		<input type="number" name="address" class="form-control" placeholder="Enter Phone Number.....">
        	</div>

            <div class="form-group">
        		<label>Password</label>
        		<input type="password" name="password" class="form-control" placeholder="Enter Password.....">
        	</div>

            <div class="form-group">
        		<label>Confirm Password</label>
        		<input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password.....">
        	</div>

        	

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    <footer>
        <div class="container">
           
                    <p class="company-name">Sweetara © 2021 </p>
               
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.min.js"></script>
   
    
    
</body>

</html>