<?php
include("databs.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!empty($name)  &&!empty($password) && !is_numeric($name)  && (pwdMatch($password, $cpassword) !== true))
    {	

      
        $user_id = random_num(20);
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $query = "insert into users (user_id,name,email,password) values ('$user_id','$name','$email','$hash')";
        
        mysqli_query($con,$query);

        
        header("Location: index.php");
         die;
       

    }else 
    {
        echo '<p>Please enter some valid information!<p>';
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
    <title>Sweetara Sign Up</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="container px-4 py-5 mx-auto">
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
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="assets/logo2.png"> </div>
                        <form action="#" class="form" id="form">
                            <div class="form-group"> <label class="form-control-label text-muted">Email</label> 
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label> 
                                <input type="password" id="pass" name="psw" placeholder="Enter your password" class="form-control" required>
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Confirm Password</label> 
                                <input type="password" id="confirmPass" name="psw" placeholder="Enter your password" class="form-control" required>
                            </div>
                            <div class="registrationFormAlert"  id="CheckPasswordMatch">
                                <script>
                                function checkPasswordMatch() {
                                    var password = $("#pass").val();
                                    var confirmPassword = $("#confirmPass").val();
                                    if (password != confirmPassword)
                                        $("#CheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
                                    else
                                        $("#CheckPasswordMatch").html("Passwords match.").css('color', 'green');
                                }
                                $(document).ready(function () {
                                   $("#confirmPass").keyup(checkPasswordMatch);
                                });
                                </script>
                            </div>

                            <div class="row justify-content-center my-3 px-3"> <button type="submit" class="btn-block btn-color">Sign Up</button> </div>
                           
                        </form>
                       
                    </div>
                </div>
                
                <div class="bottom text-center mb-5">
                    <a href="login.html" class="sm-text mx-auto mb-3">Already have an account?<button class="btn btn-white ml-2">Sign In</button></a>
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