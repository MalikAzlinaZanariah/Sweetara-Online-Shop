<?php 

session_start();

if (!isset($_SESSION["adminname"])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweetara Admin Product </title>
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
                    <li class="active" role="presentation"><a href="product.php">Product Management</a></li>
                    <li role="presentation"><a href="user.php">User Management</a></li>
                    <li role="presentation"><a href="account.php"><i class="fas fa-user" ></i></a></li>
                    <li role="presentation"><a href="signout.php"><i class="fas fa-sign-out-alt" ></i></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotrons">
            <h2>Product
                <span style="margin-left: 30px;">
		   	     <a href="#"><i class="fa fa-plus" data-toggle="modal" data-target="#myModal"></i></a></span>
            </h2>
            
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th>date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Caramel Melt Cake</td>
                        <td><img class="img-responsive" src="assets/MeltedCaramelCake.jpg"></td>
                        <td>P500</td>
                        <td>Chocolate cake with melted salted caramel cake on top</td>
                        <td>20</td>
                        <td>2021/04/25</td>
                        <td>
					     <a href="#">
					         <i class="fas fa-edit iconedit" data-toggle="modal" data-target="#edit" style="" aria-hidden="true"></i>
					    </a>
					 | <a href="#">
						     <i class="fa fa-trash icondelete" data-toggle="modal" data-target="#delete" style="" aria-hidden="true"></i>
						</a></td>
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
        <h4 class="modal-title text-center">Add Product</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">


        	<div class="form-group">
        		<label>Image</label>
        		<input type="file" name="image" class="form-control" placeholder="Insert Image File.....">
        	</div>

        	<div class="form-group">
        		<label>Name</label>
        		<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name.....">
        	</div>

        	<div class="form-group">
        		<label>Price</label>
        		<input type="number" name="product_price" class="form-control" placeholder="Enter Product Price.....">
        	</div>

        	<div class="form-group">
        		<label>Description</label>
        		<input type="textbox" name="product_description" class="form-control" placeholder="Enter Product Description.....">
        	</div>

        	<div class="form-group">
        		<label>Stock</label>
        		<input type="number" name="address" class="form-control" placeholder="Enter Product Stock.....">
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


<!------DELETE modal---->
<div id="delete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Are you sure you want to delete this item?</h4>
      </div>
      <div class="modal-body">
        <a href="delete.php?id=$id" class="btn btn-danger" style="margin-left:250px">Delete</a>
      </div>
      
    </div>

  </div>
</div>




<!--EDIT  Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title text-center">Edit Product</h4> 
      </div>

      <div class="modal-body">
        <form action="edit.php?id=$id" method="post" enctype="multipart/form-data">

            <div class="form-group">
        		<label>Image</label>
        		<input type="file" name="image" class="form-control" required>
        		<img src = "images/$image" style="width:200px; height:200px; margin-left:15rem;">
        	</div>

        	<div class="form-group">
        		<label>Name</label>
        		<input type="text" name="product_name" class="form-control" value="$product_name">
        	</div>

        	<div class="form-group">
        		<label>Price</label>
        		<input type="number" name="product_price" class="form-control" value="$price">
        	</div>

        	<div class="form-group">
        		<label>Description</label>
        		<input type="text" name="product_desc" class="form-control" value="$product_description">
        	</div>

        	<div class="form-group">
        		<label>Stock</label>
        		<input type="number" name="product_stock" class="form-control" value="$product_stock">
        	</div>

        	

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	



        </form>
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