<?php
session_start();

?>

<!DOCTYPE html>
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

    <div class="main-containt">
        <div class="container">
            <div class="title-links">
                <h1>Profile Image</h1>
                <!-- <span class="add-links-icon" onclick="edit_pesunal_details()"><i class="fas fa-edit"> - Edit</i></span> -->
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom: 80px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Your Photo</label><br> -->
                                    <label for="exampleFormControlFile1">Your Photo</label><br>
                                    <img src="../img/dummyProfile.jpg" id="exampleInputEmail1" alt="" srcset=""
                                        width="160" height="160">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image" class="form-control-file type-file"
                                    id="exampleFormControlFile1" placeholder="Upload your pic four resume"
                                    style="margin-top: 160px;">
                            </div>
                        </div>
                        <din class="buttons">
                            <button type="submit" name="profilesubmit"
                                class="btn btn-primary btn-background-colour" id="submitbutton">Save</button>
                            <a href="index.php" class="btn btn-danger blue-light-button">Cancel</a>
                        </din>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>
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
include '../dbconnection.php';

// If file upload form is submitted 
$statusMsg1 = $statusMsg2 = $statusMsg3 = $statusMsg4 = false;
$userid = $_SESSION['user_id'];
if (isset($_POST["profilesubmit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            // Insert image content into database 
            $imagesql = "UPDATE `userpersonaldetails` SET `userimage`='$imgContent' WHERE sno = $userid";
            $result = mysqli_query($conn, $imagesql);
            if ($result) {
                $statusMsg1 = "File uploaded successfully.";
            } else {
                $statusMsg2 = "File upload failed, please try again.";
            }
        } else {
            $statusMsg3 = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg4 = 'Please select an image file to upload.';
    }
}

// Display status message 
if ($statusMsg1) {
    echo "<script>alert('File uploaded successfully.')</script>";
}

if ($statusMsg2) {
    echo "<script>alert('File upload failed, please try again.')</script>";
}

if ($statusMsg3) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')</script>";
}

if ($statusMsg4) {
    echo "<script>alert('Please select an image file to upload.')</script>";
}
?>