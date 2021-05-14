
<?php
session_start(); 
?>
<?php
  if(isset($_SESSION['username'])){
    header('location: index.php');
  }
?>
<?php 

include 'databs.php';

error_reporting(0);



if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert(' Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/singUp.css">
    <link rel="shortcut icon" href="assets/logo.png"/>
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Sweetara Sign Up</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="container px-4 py-5 mx-auto">
    <a href="index.php"> <div class="d-flex justify-content-center"><i class="icon fas fa-home" style="font-size:35px;color:#d46f6d;"></i></div></a>
    <br>
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                 <div class="my-auto mx-md-5 px-md-5 right">
                        <div class="row justify-content-center px-3 mb-3"> <img id="cake" src="assets/undraw_Birthday_cake_2wxy.svg"> </div>
                    </div>
            </div>
            <div class="card card2">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="assets/logo3.png"> </div>


                        <form class="form" id="form" action="signup.php" method="post" >
                            <div class="form-group"> <label class="form-control-label text-muted">Username</label> 
                                <input type="text" id="username" name="username" placeholder="Enter your username" class="form-control" required>
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Email</label> 
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label> 
                                <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control" required>
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Confirm Password</label> 
                                <input type="password" id="cpassword" name="cpassword" placeholder="Enter to confirm your password" class="form-control" required>
                            </div>
                            <!-- <div class="registrationFormAlert"  id="CheckPasswordMatch">
                                <script>
                                function checkPasswordMatch() {
                                    var password = $("#password").val();
                                    var confirmPassword = $("#cpassword").val();
                                    if (password != confirmPassword)
                                        $("#CheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
                                    else
                                        $("#CheckPasswordMatch").html("Passwords match.").css('color', 'green');
                                }
                                $(document).ready(function () {
                                   $("#cspassword").keyup(checkPasswordMatch);
                                });
                                </script>
                            </div> -->

                            <div class="row justify-content-center my-3 px-3"> <button type="submit" name="submit" class="btn-block btn-color">Sign Up</button> </div>
                           
                        </form>
                       
                    </div>
                </div>
                
                <div class="bottom text-center mb-5">
                    <a href="signin.php" class="sm-text mx-auto mb-3">Already have an account?<button class="btn btn-white ml-2">Sign In</button></a>
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