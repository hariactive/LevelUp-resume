<?php
session_start();
include '../dbconnection.php';
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
    require 'userNavbar.php';
    ?>

    <!-- sidebar php file import -->
    <?php
    require 'userSidebar.php';
        ?>

    <div class="modal fade" id="skill-modal" tabindex="-1" role="dialog" aria-labelledby="skill-modalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Skill</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" onsubmit="return skills_detail_validation()">
                        <div class="form-group">
                            <label for="skills">Skill <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="skills" aria-describedby="emailHelp"
                                placeholder="Skill" name="skillname">
                        </div>
                        <div class="form-group">
                            <label for="select-skill">Skill level <span style="color: red;">*</span></label>
                            <select id="select-skill" class="form-control" name="skilllevel">
                                <option value="0">Selec one</option>
                                <option value="Beginner Level">Beginner Level</option>
                                <option value="Intermediate Level">Intermediate Level</option>
                                <option value="Advance Level">Advance Level</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="insertskill"
                                class="btn btn-primary btn-background-colour">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">

                </div> -->
            </div>
        </div>
    </div>

    <div class="main-containt">
        <div class="container skill-containt">
            <div class="title-skill">
                <h1>Skills</h1>
                <span class="add-skill-icon" data-toggle="modal" data-target="#skill-modal"><i
                        class="far fa-plus-square"> - Add</i></span>
                <hr>
            </div>
            <?php
            $userid = $_SESSION['user_id'];
            $fatchskillsql = "SELECT * FROM `skills` WHERE userid = '$userid'";
            $result = mysqli_query($conn, $fatchskillsql);
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Level</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    while ($row2 = mysqli_fetch_array($result)) {
                        $count = $count + 1;
                    ?>
                    <tr>
                        <td scope="row">
                            <?php echo $count; ?>
                        </td>
                        <td>
                            <?php echo $row2['skillname']; ?>
                        </td>
                        <td>
                            <?php echo $row2['skilllevel']; ?>
                        </td>
                        <td><a href="userphpfiles/editskill.php?edit_skill_id=<?php echo $row2['sno']; ?>"><i class="fas fa-edit text-success"></a></td>
                        <td><a href="userphpfiles/skilldelete.php?delete_id=<?php echo $row2['sno']; ?>"><i
                                    class="fas fa-trash-alt text-danger"></i></a></td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>
    <script src="js/skills.js"></script>

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

$showError = false;
$showError1 = false;
$showmessage = false;

if (isset($_POST['insertskill'])) {
    // include '../dbconnection.php';
    $skillname = $_POST["skillname"];
    $skilllevel = $_POST["skilllevel"];
    $skillselectsql = "SELECT * FROM `skills` WHERE skillname = '$skillname' and  userid = '$userid'";
    $result2 = mysqli_query($conn, $skillselectsql);
    $numExistRows = mysqli_num_rows($result2);
    if ($numExistRows > 0) {
        $showError = true;
    } else {
        $skillsql = "INSERT INTO `skills`(`skillname`, `skilllevel`, `userid`) VALUES ('$skillname','$skilllevel','$userid')";
        $result3 = mysqli_query($conn, $skillsql);
        if ($result3) {
            $showmessage = true;
        } else {
            $showError1 = true;
        }
    }
}

if ($showmessage) {
    echo "<script>alert('Your data uploaded successfully.')</script>";
}

if ($showError) {
    echo "<script>alert('Sorry!!!, Your skill is already present.')</script>";
}

if ($showError1) {
    echo "<script>alert('Sorry!!!, unable to update your data for somereason, Please contact to admin or try again later.')</script>";
}

?>

