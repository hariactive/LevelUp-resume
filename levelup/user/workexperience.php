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

        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

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

    <div class="modal fade" id="job-modal" tabindex="-1" role="dialog" aria-labelledby="job-modalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Experience</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" onsubmit="return workExperiencevalidation()">
                        <div class="form-group">
                            <label for="company-name">Company name <span style="color: red;">*</span></label>
                            <input type="text" name="companyname" class="form-control" id="company-name"
                                aria-describedby="emailHelp" placeholder="Google">
                        </div>
                        <div class="form-group">
                            <label for="job-title">Job profile <span style="color: red;">*</span></label>
                            <input type="text" name="jobtitle" class="form-control" id="job-title"
                                aria-describedby="emailHelp" placeholder="SDE-1 ">
                        </div>
                        <div class="form-group">
                            <label for="employee-type">Employment type <span style="color: red;">*</span></label>
                            <select id="select-skill" name="employeetype" class="form-control employment-type">
                                <option value="0">Selec one</option>
                                <option value="Full-time">Full time</option>
                                <option value="Part-time">Part time</option>
                                <option value="Internship">Internship</option>
                                <option value="Contract">Contract</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job-location">Job location <span style="color: red;">*</span></label>
                            <input type="text" name="joblocation" class="form-control" id="job-location"
                                aria-describedby="emailHelp" placeholder="Noida, Utter Pradesh">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Start date <span style="color: red;">*</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="select-skill" name="startdateyear" class="form-control start-date-year">
                                        <option value="0">Year</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="select-skill" name="startdatemonth"
                                        class="form-control start-date-month">
                                        <option value="0">Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October </option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="currentworkhere" value="yes" class="currentworking"><label
                                for="currentworking" style="padding-left: 8px;"> I currently
                                working here.</label>
                        </div>
                        <div class="form-group end-date">
                            <label for="exampleInputEmail1">End date</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="select-skill" name="enddateyear" class="form-control end-date-year">
                                        <option value="0">Year</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="select-skill" name="enddatemonth" class="form-control end-date-month">
                                        <option value="0">Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October </option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="discription" cols="30" rows="4" class="form-control" id="description"
                                aria-describedby="emailHelp" placeholder="Give some info about your job"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-background-colour">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="main-containt">
        <div class="container">
            <div class="title-work-exp">
                <h1>Work Experience</h1>
                <span class="add-skill-icon" data-toggle="modal" data-target="#job-modal"><i class="far fa-plus-square">
                        - Add</i></span>
                <hr>
            </div>
            <?php
            $userid = $_SESSION['user_id'];
            include '../dbconnection.php';
            $linkfatchsql = "SELECT * FROM `workexperience` WHERE userid = $userid";
            $resultque = mysqli_query($conn, $linkfatchsql);
            $count = 0;
            ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Job Profile</th>
                        <th scope="col">Employment Type</th>
                        <th scope="col">Job Location</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($resultque)) {
                        $count = $count + 1; ?>
                    <tr>
                        <td>
                            <?php echo $count; ?>
                        </td>
                        <td>
                            <?php echo $row['companyname']; ?>
                        </td>
                        <td>
                            <?php echo $row['jobtitle']; ?>
                        </td>
                        <td>
                            <?php echo $row['employeetype']; ?>
                        </td>
                        <td>
                            <?php echo $row['joblocation']; ?>
                        </td>
                        <td>
                            <?php echo $row['startyear']; ?>/
                            <?php echo $row['startmonth']; ?>
                        </td>
                        <td>
                            <?php
                        if ($row['endyear'] && $row['endmonth']) {
                            echo $row['startyear'] . "/ " . $row['startmonth'];
                        } else {
                            echo "Currently working here";
                        }
                            ?>
                        </td>
                        <td><a href="userphpfiles/editworkexperience.php?edit_workexp_id=<?php echo $row['sno']; ?>"><i
                                    class="fas fa-edit text-success"></a></td>
                        <td><a href="userphpfiles/experiencedelete.php?delete_wordexp_id=<?php echo $row['sno']; ?>"><i
                                    class="fas fa-trash-alt text-danger"></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>

    <script src="js/workexperience.js"></script>

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
    <script>
        CKEDITOR.replace('discription');
    </script>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // include '../dbconnection.php';
    // $userid = $_SESSION['user_id'];
    $companyname = $_POST['companyname'];
    $jobtitle = $_POST['jobtitle'];
    $employeetype = $_POST['employeetype'];
    $joblocation = $_POST['joblocation'];
    $startdateyear = $_POST['startdateyear'];
    $startdatemonth = $_POST['startdatemonth'];
    $currworkhere = $_POST['currentworkhere'];
    $enddateyear = $_POST['enddateyear'];
    $enddatemonth = $_POST['enddatemonth'];
    $descrip = $_POST['discription'];
    $worksql = "INSERT INTO `workexperience`(`companyname`, `jobtitle`, `employeetype`, `joblocation`, `startmonth`, `startyear`, `endmonth`, `endyear`, `currentlyworkhere`, `description`, `userid`) VALUES ('$companyname','$jobtitle','$employeetype','$joblocation','$startdatemonth','$startdateyear','$enddatemonth','$enddateyear','$currworkhere','$descrip','$userid')";
    $res2 = mysqli_query($conn, $worksql);
    if ($res2) {
        echo "<script>alert('Your new job experience updated successfully.')</script>";
    } else {
        echo "<script>alert('Sorry!!! unable to update right now, try after some time.')</script>";
    }
}

?>