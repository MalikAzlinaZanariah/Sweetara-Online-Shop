<?php
session_start(); 
?>
<?php
  if(isset($_SESSION['adminname'])){
    header('location: order.php');
  }
?>
<?php 

include '../databs.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['adminname'] = $row['adminname'];
		header("Location: order.php");
	} else {
		echo "<script>alert(' Email or Password is Wrong.')</script>";
	}
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="fontawesome-free-5.15.3-web\css\all.css" rel="stylesheet"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" href="assets/logo.png"/>
    <title>Sweetara Admin</title>
  </head>
  <body>
    <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"><img id="logo" src="assets/logo3.png">Admin</div>
                        
                        <form class="form" id="form" action="index.php" method="post" >
                            <div class="form-group"> <label class="form-control-label text-muted">Email</label> 
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label> 
                                <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control" required>
                            </div>

                            <div class="row justify-content-center my-3 px-3"> <button type="submit" name="submit" class="btn-block btn-color">Sign in</button> </div>
                        </form>
                        <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted fpsw">Forgot Password?</small></a> </div>
                    </div>
                </div>
            
            </div>
    
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>