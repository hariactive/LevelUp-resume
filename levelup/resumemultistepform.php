<?php
session_start();
include 'dbconnection.php';

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
    <link rel="stylesheet" href="style.css">
    <title>LevelUpResume - Home</title>
</head>

<body>

    <!-- Navbar php file import -->
    <?php
    require 'navbar.php'
        ?>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reminder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>We recomend you to first complete your profile 100%!!!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="back-hight-full">
        <div class="view-template">
            <span class="view-resume-template"><i class="fas fa-eye"></i> View</span>
        </div>
        <!-- MultiStep Form -->
        <form id="regForm" action="/action_page.php">
            <!-- Circles which indicates the steps of the form: -->

            <div style="text-align:center;margin-bottom:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <!-- <span class="step"></span> -->
            </div>
            <!-- <h1>Register:</h1> -->
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <h3>Personal Details</h3>
                <?php require 'multiformpages/personaldata.php' ?>
            </div>
            <div class="tab">
                <h3>Skills</h3>
                <?php require 'multiformpages/skillsdata.php' ?>
            </div>
            <div class="tab">
                <h3>Work Experience</h3>
                <?php require 'multiformpages/expedata.php' ?>
            </div>
            <div class="tab">
                <h3>Education</h3>
                <?php require 'multiformpages/edudata.php' ?>
            </div>
            <div class="tab">
                <h3>Certification</h3>
                <?php require 'multiformpages/ceridata.php' ?>
            </div>
            <div class="tab">
                <h3>Projects</h3>
                <?php require 'multiformpages/projdata.php' ?>
            </div>
            <!-- <div class="tab">
                <h3>Links</h3>
                <?php 
                // require 'multiformpages/linksdata.php' ?>
            </div> -->
            <div style="overflow:auto;">
                <div class="text-center">
                    <button class="multiform-button" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="multiform-button" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
        </form>
    </div>

    <?php
    require 'footer.php'
        ?>

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
        CKEDITOR.replace('worktextarea');
    </script>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Done";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !true) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>

</body>