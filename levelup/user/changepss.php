<?php
session_start();
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
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="css/UserStyle.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <title>User Profile</title>
</head>

<body onload="document.querySelector('#currentpass').focus()">

    <!-- Navbar php file import -->
    <?php
    require 'userNavbar.php'
        ?>

    <!-- sidebar php file import -->
    <?php
    require 'userSidebar.php'
        ?>

    <div class="main-containt">
        <div class="container changepass-form">
            <h1>Change Password</h1>
            <hr class="userhr">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" style="margin-bottom: 120px" onsubmit="return changepasswordpagevalidation()">
                        <div class="form-group">
                            <label for="currentpass">Current password <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="currentpass" placeholder="Current password" name="currentpassword">
                        </div>
                        <div class="form-group">
                            <label for="newpass">New password <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="newpass" placeholder="New password" name="newpasswoed">
                        </div>
                        <div class="form-group">
                            <label for="confirmpass">Confirm password <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="confirmpass" placeholder="Confirm password" name="confirmpassword">
                        </div>

                        <button type="submit" class="btn btn-primary blue-light-button">Save</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
<!-- my javascript file include -->
<script src="../js/script.js" ></script>
<script src="js/changepasswordvalidate.js" ></script>

</html>

<?php

$userid = $_SESSION['user_id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../dbconnection.php';
    $currentpass = $_POST['currentpassword'];
    $newpass = $_POST['newpasswoed'];
    $confirmpass = $_POST['confirmpassword'];
    $sqlquery = "SELECT * FROM `userpersonaldetails` WHERE sno = $userid";
    $res = mysqli_query($conn, $sqlquery);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($row['userpassword'] == $currentpass) {
            $sqlque = "UPDATE `userpersonaldetails` SET userpassword ='$confirmpass' WHERE sno = $userid";
            $res1 = mysqli_query($conn, $sqlque);
            if ($res1) {
                echo "<script>alert('Password update successfully.')</script>";
            }
        } else {
            echo "<script>alert('your current password is not correct')</script>";
        }
    }
}

?>