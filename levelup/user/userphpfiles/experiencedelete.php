<?php
$showError = false;
$showmessage = false;
include '../../dbconnection.php';
if ($_REQUEST['delete_wordexp_id']) {
    $wordexp_sql_delete = "DELETE FROM `workexperience` WHERE sno ='" . $_REQUEST['delete_wordexp_id'] . "'";
    $resultset = mysqli_query($conn, $wordexp_sql_delete);
    if ($resultset) {
        $showmessage = true;
    } else {
        $showError = true;
    }
}

if ($showmessage) {
    echo "<script>alert('Your work experience successfully deleted.');window.location.replace('../workexperience.php');</script>";
}

if ($showError) {
    echo "<script>alert('try again.')</script>";
}
?>