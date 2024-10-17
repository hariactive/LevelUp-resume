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
    <link rel="stylesheet" href="responsivestyle.css">
    <title>LevelUpResume - Home</title>
</head>

<body>

    <!-- Navbar php file import -->
    <?php
    require 'navbar.php'
        ?>


    <!-- landing section start -->
    <section class="banner">
        <!-- <img src="img/landingImg.jpg" alt="" srcset=""> -->
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12">
                    <div class="banner_desc">
                        <h1 class="title">Welcome to the LevelUpResume</h1>
                        <h3 class="title2">Get your First Job in faster way.</h3>
                        <p class="desc">Standing out <i class="fab fa-slack"></i> Professional <i
                                class="fab fa-slack"></i> Recruiter-approved <i class="fab fa-slack"></i> Share with
                            others <br> Ready in minutes with our step-by-step builder.</p>
                        <!-- <a href="#" class="btn btn-color">Create Your First Resume</a> -->
                        <a href="resume.php"><button>Create Your First Resume</button></a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-0 col-0">
                    <div class="banner_desc_resume_img">
                        <img src="img/brandresume.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- landing end start -->

    <div class="section2">
        <h2>Three steps to create a resume</h2>
        <p class="tagline">Simple Right?</p>
        <hr>
        <div class="container steps">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="far fa-id-card"></i> Step 1</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Complete Your Profile 100%</h6>
                            <p class="card-text">Easy to use step-by-step select the section and manage your data in a creative way. all section provides you to manage your persunal and Professional data.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card margin-card">
                        <div class="card-body">
                            <h5 class="card-title">Step 2</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Select Resume Template</h6>
                            <p class="card-text">Make your resume more sophisticated. Select from thousands of pre-written bullet points for hundreds of jobs and careers. Just click and insert them directly into your resume!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-folder-open"></i> Step 3</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Download Your Resume In PDF File</h6>
                            <p class="card-text">No limit on the number of CVs you can create. Unlimited printing, sharing and downloading in PDF, Word, plain text or image formats. Limitless creativity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="container">
            <h2>Resume Templates</h2>
            <hr>
            <div class="row containt">
                <div class="col-md-3 col-12 col-sm-12">
                    <img src="resumes/one.jpg" alt="" srcset="">
                </div>
                <div class="col-md-3 col-12 col-sm-12">
                <img src="resumes/five.png" alt="" srcset="">
                </div>
                <div class="col-md-3 col-12 col-sm-12">
                <img src="resumes/three.jpg" alt="" srcset="">
                </div>
                <div class="col-md-3 col-12 col-sm-12">
                <img src="resumes/four.jpg" alt="" srcset="">
                </div>
            </div>
            <div class="text-center">
            <a href="resume.php"><button>More templates</button></a>
            </div>
        </div>
    </div>

    <div class="container home-faqs">
        <div class="faqs">
            <h2 class="text-center">Common FAQs</h2>
            <hr>
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
                            <button class="btn btn-link btn-block text-left collapsed collapsing-heading" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                How to Download a TXT File for Free
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Once you create your resume on LavelUpResume and want to download it for free, you can
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
                            <button class="btn btn-link btn-block text-left collapsed collapsing-heading" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                How Do I Share My Resume?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>When your resume is ready, you can use LavelUpResume to share an online link to your
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
                            <button class="btn btn-link btn-block text-left collapsed collapsing-heading" type="button"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                How Do I Create a Resume?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>Create an effective resume on LavelUpResume in 4 steps</h5>
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