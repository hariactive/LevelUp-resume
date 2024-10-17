<?php
$showError = false;
$showmessage = false;
include '../../dbconnection.php';
if ($_REQUEST['delete_id']) {
    $certificate_sql_delete = "DELETE FROM `certificates` WHERE sno ='" . $_REQUEST['delete_id'] . "'";
    $resultset = mysqli_query($conn, $certificate_sql_delete);
    if ($resultset) {
        $showmessage = true;
    } else {
        $showError = true;
    }
}

if ($showmessage) {
    echo "<script>alert('Certificate successfully deleted.');window.location.replace('../certifications.php');</script>";
}

if ($showError) {
    echo "<script>alert('try again.')</script>";
}
?>