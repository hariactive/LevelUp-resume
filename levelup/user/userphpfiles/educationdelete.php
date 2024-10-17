<?php
$showError = false;
$showmessage = false;
include '../../dbconnection.php';
if ($_REQUEST['delete_education_id']) {
    $edu_sql_delete = "DELETE FROM `education` WHERE sno ='" . $_REQUEST['delete_education_id'] . "'";
    $resultset = mysqli_query($conn, $edu_sql_delete);
    if ($resultset) {
        $showmessage = true;
    } else {
        $showError = true;
    }
}

if ($showmessage) {
    echo "<script>alert('Your education successfully deleted.');window.location.replace('../education.php');</script>";
}

if ($showError) {
    echo "<script>alert('try again.')</script>";
}
?>