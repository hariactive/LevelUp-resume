<?php
$showError = false;
$showmessage = false;
include '../../dbconnection.php';
if ($_REQUEST['delete_id']) {
    $skill_sql_delete = "DELETE FROM `skills` WHERE sno ='" . $_REQUEST['delete_id'] . "'";
    $resultset = mysqli_query($conn, $skill_sql_delete);
    if ($resultset) {
        $showmessage = true;
    } else {
        $showError = true;
    }
}

if ($showmessage) {
    echo "<script>alert('Skill successfully deletsed.');window.location.replace('../skills.php');</script>";

}

if ($showError) {
    echo "<script>alert('try again.')</script>";
}
?>