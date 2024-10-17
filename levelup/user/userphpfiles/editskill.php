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
        <div class="container skill-containt">
            <div class="title-skill">
                <h1>Edit Skill</h1>
                <!-- <span class="add-skill-icon" data-toggle="modal" data-target="#skill-modal"><i
                        class="far fa-plus-square"> - Add</i></span> -->
                <hr>
            </div>
            <?php
            // include 'DataBaseConnection.php';
            if (isset($_GET['edit_skill_id'])) {
                $sql = "SELECT * FROM `skills` WHERE sno =" . $_GET['edit_skill_id'];
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            <form action="" method="post" onsubmit="return skills_detail_validation()" style="width: 89%;">
                <div class="form-group">
                    <label for="skills">Skill <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="skills" aria-describedby="emailHelp" placeholder="Skill"
                        name="skillname" value="<?php echo $row['skillname']; ?>">
                </div>
                <div class="form-group">
                    <label for="select-skill">Skill level <span style="color: red;">*</span></label>
                    <select id="select-skill" class="form-control" name="skilllevel">
                        <option value="0">Selec one</option>
                        <option value="<?php echo $row['skilllevel']; ?>" selected>
                            <?php echo $row['skilllevel']; ?>
                        </option>
                        <option value="Beginner Level">Beginner Level</option>
                        <option value="Intermediate Level">Intermediate Level</option>
                        <option value="Advance Level">Advance Level</option>
                    </select>
                </div>
                <div>
                    <button type="submit" name="insertskill"
                        class="btn btn-primary btn-background-colour">Submit</button>
                        <a href="../skills.php" class="btn btn-danger">Close</a>
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>



    <!-- my javascript file include -->
    <script src="../../js/script.js"></script>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skillname = $_POST["skillname"];
    $skilllevel = $_POST["skilllevel"];
    $skillselectsql = "UPDATE `skills` SET skillname='$skillname',skilllevel='$skilllevel' WHERE sno =" . $_GET['edit_skill_id'];
    $result2 = mysqli_query($conn, $skillselectsql);
    if ($result2) {
        echo "<script>alert('Your skill update successfully.');window.location.replace('../skills.php');</script>";
    }
}
?>

<!-- UPDATE `skills` SET skillname='[value-2]',skilllevel='[value-3]' WHERE  -->