<?php
session_start();
include '../../dbconnection.php';

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
    <link rel="stylesheet" href="../css/UserStyle.css">
    <title>User Profile</title>
</head>

<body>

    <!-- Navbar php file import -->
    <?php
    require 'hiddneuserNavbar.php';
    ?>

    <!-- sidebar php file import -->
    <?php
    require 'hiddnesidebar.php';
    ?>


    <div class="main-containt">
        <div class="container">
            <div class="title-work-exp">
                <h1>Edit Certification</h1>
                <!-- <span class="add-skill-icon" data-toggle="modal" data-target="#job-modal"><i class="far fa-plus-square">
                        - Add</i></span> -->
                <hr>
                <?php
                // include 'DataBaseConnection.php';
                if (isset($_GET['edit_certificate_id'])) {
                    $sql = "SELECT * FROM `certificates` WHERE sno =" . $_GET['edit_certificate_id'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <form action="#" method="post" onsubmit="return certificateverification()" style="margin-bottom: 80px;">
                    <div class="form-group">
                        <label for="certificate-name">Certificate name <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="certificate-name" aria-describedby="emailHelp"
                            placeholder="C Programming Certificate" name="certificatename"
                            value="<?php echo $row['certificatename']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Issue date <span style="color: red;">*</span></label>
                        <div class="row">
                            <div class="col-md-6">
                                <select id="select-skill" class="form-control certificate-issue-year"
                                    name="issuedateyear">
                                    <option value="0">Year</option>
                                    <option value="<?php echo $row['certificateissuedateyear']; ?>" selected>
                                        <?php echo $row['certificateissuedateyear']; ?>
                                    </option>
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
                                <select id="select-skill" class="form-control certificate-issue-month"
                                    name="issuedatemonth">
                                    <option value="0">Month</option>
                                    <option value="<?php echo $row['certificateissuedatemonth']; ?>" selected>
                                        <?php echo $row['certificateissuedatemonth']; ?>
                                    </option>
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
                        <label for="certificate-url">Certificate URL</label>
                        <input type="text" class="form-control" id="certificate-url" placeholder="https://example.com"
                            name="certificateurl" value="<?php echo $row['certificateurl']; ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-background-colour"
                            name="insertcertificate">Save</button>
                        <a href="../certifications.php" class="btn btn-danger">Close</a>
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../../js/script.js"></script>
    <script src="js/certificate.js"></script>

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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ceriname = $_POST["certificatename"];
    $ceriyear = $_POST["issuedateyear"];
    $cerimonth = $_POST["issuedatemonth"];
    $ceriurl = $_POST["certificateurl"];
    $certificateselectsql = "UPDATE `certificates` SET certificatename='$ceriname',certificateissuedateyear='$ceriyear',certificateissuedatemonth='$cerimonth',certificateurl='$ceriurl' WHERE sno =" . $_GET['edit_certificate_id'];
    $result2 = mysqli_query($conn, $certificateselectsql);
    if ($result2) {
        echo "<script>alert('Your certificate update successfully.');window.location.replace('../certifications.php');</script>";
    }
}
?>