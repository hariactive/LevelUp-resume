<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('location:index.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Style css file -->
    <link rel="stylesheet" href="style.css">
    <title>LavelUpResume - Sign-in</title>
</head>

<body onload="document.querySelector('#email1').focus()">

    <!-- Navbar php file import -->
    <?php
    require 'navbar.php'
        ?>

    <!-- login section start -->
    <div class="container-fluid back-login-img">
        <div class="container container-section-login">
            <div class="row">
                <div class="col-md-6 right-side-login">
                    <img src="img/login.svg" alt="">
                </div>

                <div class="col-md-6">
                    <div class="back">
                        <div class="div-center">
                            <div class="content">
                                <h3>Sign-In</h3>
                                <hr />
                                <form class="form1" action="signin.php" method="post" name="signinform"
                                    onsubmit="return loginvalidationafterclick()">
                                    <div class="form-group">
                                        <label for="username2">Username <span style="color: red;">*</span></label>
                                        <input type="text" name="username" class="form-control no-outline"
                                            id="username2" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password1">Password <span style="color: red;">*</span></label>
                                        <input type="password" class="form-control" id="password1"
                                            placeholder="min 8 characters password" name="password">
                                    </div>
                                    <div class="forget-link">
                                        <a href="forgetpass.php">Forget Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <p>Don't have an account <a href="signup.php">Sign-up Here</a></p>
                                    <hr />
                                    <div class="social-media-login-links">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-google"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </form>
                            </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login section end -->


    <?php
    require 'footer.php'
        ?>



</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->

<!-- fontawesome kit -->
<script src="https://kit.fontawesome.com/d86ae2f46d.js" crossorigin="anonymous"></script>

<!-- validation javascript file -->
<script src="js/loginValidation.js"></script>

<?php
include 'dbconnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $res = mysqli_query($conn, "SELECT * FROM `userpersonaldetails` WHERE username='$username' AND userpassword='$password'");
    if (mysqli_num_rows($res) > 0) {
        // session_start();
        // echo var_dump(mysqli_fetch_assoc($res));
        $row = mysqli_fetch_assoc($res);
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['sno'];
        echo '<script>window.location.replace("index.php");</script>';
    } else {
        echo "<script>alert('please enter correct username and password')</script>";
    }
}
?>

</html>