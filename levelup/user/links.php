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

<body>

    <!-- Navbar php file import -->
    <?php
    require 'userNavbar.php'
        ?>

    <!-- sidebar php file import -->
    <?php
    require 'userSidebar.php'
        ?>
    <?php
    $userid = $_SESSION['user_id'];
    include '../dbconnection.php';
    // $firstinsert = "INSERT INTO `links`(`userid`) VALUES ('$userid')";
    // $resultque22 = mysqli_query($conn, $firstinsert);
    $linkfatchsql = "SELECT * FROM `links` WHERE userid = $userid";
    $resultque = mysqli_query($conn, $linkfatchsql);
    $row = mysqli_fetch_array($resultque);
    ?>
    <div class="main-containt">
        <div class="container">
            <div class="title-links">
                <h1>Links</h1>
                <!-- <span class="add-links-icon" onclick="edit()"><i class="fas fa-edit"> - Edit</i></span> -->
                <hr class="userhr">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" style="margin-bottom: 120px" class="linkform">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Leetcode</label>
                            <input type="text" name="leetcode" class="form-control input1" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="&#xf5fc; Leetcode  (https://leetcode/deshboard.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['leetcodelink'] == !'') {
                                    echo 'value="' . $row['leetcodelink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Hackerearth</label>
                            <input type="text" name="hackerearth" class="form-control input2" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="&#xf121; Hackerearth  (https://hackerearth/deshboard.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['hackerearthlink'] == !'') {
                                    echo 'value="' . $row['hackerearthlink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Hackerrank</label>
                            <input type="text" name="hackerrank" class="form-control input3" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="&#xf5f7; Hackerrank  (https://hackerrand/deshboard.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['hackerranklink'] == !'') {
                                    echo 'value="' . $row['hackerranklink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> LinkedIn</label>
                            <input type="text" name="linkedin" class="form-control input4" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="&#xf08c; LinkedIn  (https://linkedin.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['linkerinlink'] == !'') {
                                    echo 'value="' . $row['linkerinlink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Twitter</label>
                            <input type="text" name="twitter" class="form-control input5" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="&#xf081; Twitter  (https://twitter.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['twitterlink'] == !'') {
                                    echo 'value="' . $row['twitterlink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Facebook</label>
                            <input type="text" name="facebook" class="form-control input6" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="&#xf082; Facebook (https://facebook.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['facebooklink'] == !'') {
                                    echo 'value="' . $row['facebooklink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Instagram</label>
                            <input type="text" name="instagram" class="form-control input7" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xe055; Instagram (https://instagram.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['instagramlink'] == !'') {
                                    echo 'value="' . $row['instagramlink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">GitHub</label>
                            <input type="text" name="github" class="form-control input8" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xf092; GitHub (https://github.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['githublink'] == !'') {
                                    echo 'value="' . $row['githublink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stack Overflow</label>
                            <input type="text" name="stackover" class="form-control input9" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder=" &#xf16c; Stack Overflow (https://stackoverflow.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['stackoverflowlink'] == !'') {
                                    echo 'value="' . $row['stackoverflowlink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" name="website" class="form-control input10" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xf0ac; Website (https://brand.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['websitelink'] == !'') {
                                    echo 'value="' . $row['websitelink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Blog</label>
                            <input type="text" name="blog" class="form-control input11" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xf37c; Blog (https://blogpost.com)"
                                style="font-family:Arial, FontAwesome" <?php if ($row && $row['bloglink'] == !'') {
                                    echo 'value="' . $row['bloglink'] . '"';
                                } else {
                                    echo 'value=""';
                                }?>>
                        </div>
                        <button type="submit" class="btn btn-primary btn-background-colour"
                            id="submitbutton">Save</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>

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

    <script src="js/linkedit.js"></script>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // include '../dbconnection.php';
    $leetcode = $_POST['leetcode'];
    $hackerearth = $_POST['hackerearth'];
    $hackerrank = $_POST['hackerrank'];
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $github = $_POST['github'];
    $stackover = $_POST['stackover'];
    $website = $_POST['website'];
    $blog = $_POST['blog'];
    $fatchuserid = "SELECT * FROM `links` WHERE userid = $userid";
    $res = mysqli_query($conn, $fatchuserid);
    if (mysqli_num_rows($res) > 0) {
        $linksql = "UPDATE `links` SET leetcodelink = '$leetcode', hackerearthlink = '$hackerearth', hackerranklink='$hackerrank',linkerinlink='$linkedin',twitterlink='$twitter',facebooklink='$facebook',instagramlink='$instagram',githublink='$github',stackoverflowlink='$stackover', websitelink='$website', bloglink='$blog' WHERE userid = $userid";
        $res2 = mysqli_query($conn, $linksql);
        if ($res2) {
            echo "<script>alert('links update successfully.')</script>";
        } else {
            echo "<script>alert('try again later.')</script>";
        }
    } 
    else {
        $linksql2 = "INSERT INTO `links`(`leetcodelink`, `hackerearthlink`, `hackerranklink`, `linkerinlink`, `twitterlink`, `facebooklink`, `instagramlink`, `githublink`, `stackoverflowlink`, `websitelink`, `bloglink`, `userid`) VALUES ('$leetcode','$hackerearth','$hackerrank','$linkedin','$twitter','$facebook','$instagram','$github','$stackover','$website','$blog','$userid')";
        $res3 = mysqli_query($conn, $linksql2);
        if ($res3) {
            echo "<script>alert('links inser successfully.')</script>";
        } else {
            echo "<script>alert('try again later.')</script>";
        }
    }
}
?>

<!-- UPDATE `links` SET leetcodelink='[value-2]', hackerearthlink='[value-3]',hackerranklink='[value-4]',linkerinlink='[value-5]',twitterlink='[value-6]',facebooklink='[value-7]',instagramlink='[value-8]',githublink='[value-9]',stackoverflowlink='[value-10]', websitelink='[value-11]', bloglink='[value-12]', userid='[value-13]' WHERE userid = $userid -->