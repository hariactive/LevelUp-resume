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
    <link rel="stylesheet" href="style.css">
    <title>LevelUpResume - About Us</title>
</head>

<body>

    <!-- Navbar php file import -->
    <?php
    require 'navbar.php'
        ?>

    <!-- landing section start -->
    <section class="about-us-landing-img">
        <h1>About us</h1>
    </section>

    <div class="about-main-containt">
        <div class="container">
            <div class="about-first-sec">
                <h1>LevelUpResume.com is 100% free to use</h1>
                <p>Resume.com has no cost, no ads and no limitations. Access features that will help you get hired:</p>
                <ul>
                    <li><i class="fas fa-chevron-right"></i> Build a professional resume backed by research with
                        hundreds of employers.</li>
                    <li><i class="fas fa-chevron-right"></i> Choose from smart resume templates that highlight your best
                        qualities.</li>
                    <li><i class="fas fa-chevron-right"></i> Print, download and share your resume instantly in flexible
                        formats like PDF and .doc.</li>
                    <li><i class="fas fa-chevron-right"></i> Share your resume with Indeed to easily apply to jobs.</li>
                    <li><i class="fas fa-chevron-right"></i> Access professional resume examples formatted for specific
                        jobs and industries.</li>
                    <li><i class="fas fa-chevron-right"></i> Log in to your account to update your resume online.</li>
                    <li><i class="fas fa-chevron-right"></i> Get free job search and career advice to help you build
                        your resume and get the job.</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="faqs">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsing-heading" type="button"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How can I use LevelUpResume.com?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i>Create a great resume from scratch with the
                                        assistance of our resume builder that walks you through the process. </li>
                                    <!-- <li><i class="fas fa-chevron-right"></i>Write a Cover Letter with one of our
                                    easy-to-use templates designed to match your resume and download it as a PDF for
                                    free. </li> -->
                                    <li><i class="fas fa-chevron-right"></i>Download a TXT file of your resume to copy /
                                        paste and design on your own.</li>
                                    <li><i class="fas fa-chevron-right"></i>Log in to edit / access your resume.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed collapsing-heading"
                                    type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    How to Download a TXT File for Free
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Once you create your resume on LevelUpResume and want to download it for free, you can
                                download
                                a TXT file. A TXT file is exactly what it sounds like. It's only the text of your resume
                                without a design theme. Once you download the TXT file, you can open it on your
                                computer,
                                select all the text, then copy and paste the text into a word processor like Word or
                                Google
                                docs. From there you can adjust the format and style on your own, but still have the
                                foundation of a great resume. You can also download a PDF or TXT File of your Cover
                                Letter
                                for free.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed collapsing-heading"
                                    type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    How Do I Share My Resume?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>When your resume is ready, you can use LevelUpResume to share an online link to your
                                    resume for free. By default your materials are private and only shared if you choose
                                    to
                                    use our sharing features. You can easily download a PDF of your resume and cover
                                    letter
                                    to be saved and shared with employers.</p>
                                <p> Sharing a link is a convenient and modern way to send your resume/and or cover
                                    letter
                                    via email, social media message, or even via text message. You can use our premium
                                    design themes online for free without upgrading to a premium account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed collapsing-heading"
                                    type="button" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    How Do I Create a Resume?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <h5>Create an effective resume on LevelUpResume in 4 steps</h5>
                                <ul>
                                    <li>1. First you need to complete your profile 100%.</li>
                                    <li>2. Select your resume design to create a resume and cover letter.
                                    </li>
                                    <li>3. Edit your resume according to your preference.</li>
                                    <li>4. download your resume by clicking the download button.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>