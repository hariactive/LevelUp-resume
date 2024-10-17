<?php
session_start();
include '../dbconnection.php';
$userid = $_SESSION['user_id'];
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



    <div class="main-containt deshboard">
        <div class="container">
            <h1>Dashboard</h1>
            <hr class="userhr">
            <?php
            $basicsql = "SELECT * FROM `userpersonaldetails` WHERE sno =" . $userid;
            $result1 = mysqli_query($conn, $basicsql);
            $row1 = mysqli_fetch_array($result1);
            ?>
            <div class="deshboard-first">
                <div class="row personal-details">
                    <div class="md-col-12 m-auto">
                        <div class="intro-image">
                            <?php if ($row1['userimage']) { ?>
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['userimage']); ?>"
                                alt="Your profile image" srcset="">
                            <?php } else { ?>
                            <img src="../img/profile.jpg" alt="Your profile image" srcset=""><?php } ?>
                        </div>
                        <table style="margin-top: 20px;">
                            <tbody>
                                <tr>
                                    <td>
                                        <p><span class="text-head">Username: </span></p>
                                    </td>
                                    <td>
                                        <p><?php echo $row1['username']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="text-head">Full name: </span></p>
                                    </td>
                                    <td>
                                        <p><?php echo $row1['fullname']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="text-head">Phone: </span></p>
                                    </td>
                                    <td>
                                        <p><?php echo $row1['phone']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="text-head">Email: </span></p>
                                    </td>
                                    <td>
                                        <p><?php echo $row1['email']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="text-head">Address: </span></p>
                                    </td>
                                    <td>
                                        <p><?php echo $row1['location'] ." ".$row1['country']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="text-head">Password: </span></p>
                                    </td>
                                    <td>
                                        <p><a href="changepss.php" style="color:#000">Change Password</a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- <span class="colorGreen"><i class="fas fa-check"></i>verified </span> -->
                        <!-- <span class="colorRed"><i class="fas fa-times"></i>Not-verified</span> -->

                        <!-- <span span class="colorGreen"><i class="fas fa-check"></i>varified</span> -->
                        <!-- <span class="colorRed"><i class="fas fa-times"></i>Not-verified</span> -->
                        <!-- </p> -->

                    </div>
                </div>
            </div>
            <div class="userIntro">
                <h4>Objective:</h4>
                <p><?php echo $row1['objective']; ?></p>
            </div>
            <div class="userSkills">
                <h4>Skills:</h4>
                <?php
                $skillsql = "SELECT * FROM `skills` WHERE userid =" . $userid;
                $result2 = mysqli_query($conn, $skillsql);
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Skills</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count1 = 0;
                        while ($row2 = mysqli_fetch_array($result2)) {
                            $count1 = $count1 + 1;
                        ?>
                        <tr>
                            <td><?php echo $count1; ?></td>
                            <td><?php echo $row2['skillname']; ?></td>
                            <td><?php echo $row2['skilllevel']; ?></td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="userExperience">
                <h4>Work Experience:</h4>
                <?php
                $exprisql = "SELECT * FROM `workexperience` WHERE userid =" . $userid;
                $result3 = mysqli_query($conn, $exprisql);
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Job Type</th>
                            <th scope="col">Job Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count2 = 0;
                        while ($row3 = mysqli_fetch_array($result3)) {
                            $count2 = $count2 + 1;
                        ?>
                        <tr>
                            <td><?php echo $count2; ?></td>
                            <td><?php echo $row3['jobtitle']; ?></td>
                            <td><?php echo $row3['companyname']; ?></td>
                            <td><?php echo $row3['employeetype']; ?></td>
                            <td> <?php echo $row3['joblocation']; ?></td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="userEducation">
                <h4>Education:</h4>
                <?php
                $eduasql = "SELECT * FROM `education` WHERE userid =" . $userid;
                $result4 = mysqli_query($conn, $eduasql);
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">School/College</th>
                            <th scope="col">Degree Name</th>
                            <th scope="col">Degree Type</th>
                            <th scope="col">Percentage</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $count3 = 0;
                        while ($row4 = mysqli_fetch_array($result4)) {
                            $count3 = $count3 + 1;
                        ?>
                        <tr>
                            <td><?php echo $count3; ?></td>
                            <td><?php echo $row4['schoolname']; ?></td>
                            <td><?php echo $row4['degreename']; ?></td>
                            <td><?php echo $row4['degreetype']; ?></td>
                            <td><?php echo $row4['persent']; ?></td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="userCertification">
                <h4>Certification:</h4>
                <?php
                $certisql = "SELECT * FROM `certificates` WHERE userid =" . $userid;
                $result5 = mysqli_query($conn, $certisql);
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Certification Name</th>
                            <th scope="col">Issue Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count4 = 0;
                        while ($row5 = mysqli_fetch_array($result5)) {
                            $count4 = $count4 + 1;
                        ?>
                        <tr>
                            <td><?php echo $count4; ?></td>
                            <td><?php echo $row5['certificatename']; ?></td>
                            <td><?php echo $row5['certificateissuedateyear'] . "/ " . $row5['certificateissuedatemonth']; ?></td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="userProject">
                <h4>Projects:</h4>
                <?php
                $projsql = "SELECT * FROM `project` WHERE userid =" . $userid;
                $result6 = mysqli_query($conn, $projsql);
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Preview</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count5 = 0;
                        while ($row6 = mysqli_fetch_array($result6)) {
                            $count5 = $count5 + 1;
                        ?>
                        <tr>
                            <td><?php echo $count5; ?></td>
                            <td><?php echo $row6['projectname']; ?></td>
                            <td><?php echo $row6['projectcompleteyear'] . "/ " . $row6['projectcompletemonth']; ?></td>
                            <td>
                                <?php
                            if ($row6['projecturl']) {
                                echo '<a href="' . $row6['projecturl'] . '" class="btn btn-primary btn-background-colour" target="_blank">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button>';
                            }
                                ?>
                            </td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="userLinks">
                <h4>Links:</h4>
                <?php
                $linkfatchsql = "SELECT * FROM `links` WHERE userid = $userid";
                $result7 = mysqli_query($conn, $linkfatchsql);
                $row7 = mysqli_fetch_array($result7);
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Profile</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Leetcode</td>
                            <td>
                                <?php
                                if ($row7 && $row7['leetcodelink'] == !'') {
                                    echo '<a href="' . $row7['leetcodelink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                                } else {
                                    echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                                }
                                ?>   
                        </tr>
                        <tr>
                            <td>Hackerearth</td>
                            <td><?php
                            if ($row7 && $row7['hackerearthlink'] == !'') {
                                echo '<a href="' . $row7['hackerearthlink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Hackerrank</td>
                            <td><?php
                            if ($row7 && $row7['hackerranklink'] == !'') {
                                echo '<a href="' . $row7['hackerranklink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>LinkedIn</td>
                            <td><?php
                            if ($row7 && $row7['linkerinlink'] == !'') {
                                echo '<a href="' . $row7['linkerinlink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td><?php
                            if ($row7 && $row7['twitterlink'] == !'') {
                                echo '<a href="' . $row7['twitterlink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td><?php
                            if ($row7 && $row7['facebooklink'] == !'') {
                                echo '<a href="' . $row7['facebooklink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td><?php
                            if ($row7 && $row7['instagramlink'] == !'') {
                                echo '<a href="' . $row7['instagramlink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>GitHub</td>
                            <td><?php
                            if ($row7 && $row7['githublink'] == !'') {
                                echo '<a href="' . $row7['githublink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Stack Overflow</td>
                            <td><?php
                            if ($row7 && $row7['stackoverflowlink'] == !'') {
                                echo '<a href="' . $row7['stackoverflowlink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?php
                            if ($row7 && $row7['websitelink'] == !'') {
                                echo '<a href="' . $row7['websitelink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                        <tr>
                            <td>Blog</td>
                            <td><?php
                            if ($row7 && $row7['bloglink'] == !'') {
                                echo '<a href="' . $row7['bloglink'] . '" class="btn btn-primary btn-background-colour">View</a>';
                            } else {
                                echo '<button disabled="disabled" class="btn btn-dange">Not-avaliable</button></td>';
                            }
                            ?></td>
                        </tr>
                    </tbody>
                </table>
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
</body>

</html>