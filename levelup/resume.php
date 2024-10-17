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
    <link rel="stylesheet" href="resumes/resumeStyle.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js" integrity="sha512-ICHkAOXzVDEkL5xkXjAWRV/hx6Bq4ID/uhRcnj9zS7QCdCbhVtfgjwt/vTfUBtW1wzBkErImU0huK3LDVeEr8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>LavelUpResume - Resume's</title>
</head>

<body>

    <!-- Navbar php file import -->
    <?php
    require 'navbar.php'
        ?>

    <!-- landing section start -->
    <section class="back-contact-us-img">
        <h1 class="text-center">Resume Templates</h1>
    </section>

    <div class="container">
        <div class="resume-text text-center">
            <h2>Job-winning simple resume templates</h2>
            <p>Each template is expertly designed and follows the exact “resume rules” hiring managers look for. Stand
                out and get hired faster with field-tested resume templates.</p>
        </div>
        <div class="row resume-display">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/resumefirst.jpg" alt="Card image cap"
                        style="width: 18rem;height: 22rem;">
                    <div class="card-body text-center">
                        <!-- <a href="resumemultistepform.php"><button class="button-one">Use Template</button></a> -->
                        <a href="" data-toggle="modal" data-target="#exampleModalCenter"
                            class="button-two">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/two2.jpg" alt="Card image cap"
                        style="width: 18rem;height: 22rem;">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/three3.jpg" alt="Card image cap"
                        style="width: 18rem;height: 22rem;">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row resume-display">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/one.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/one.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/one.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row resume-display">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/one.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/one.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resumes/one.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <!-- <a href="#"><button class="button-one">Use Template</button></a> -->
                        <a href="#"><button class="button-two">View</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require 'resumes/resume1.php' ?>

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
    <script src="js/pdf.js"></script>
    <script src="js/word.js"></script>
</body>

</html>