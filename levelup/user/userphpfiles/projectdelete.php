<?php
$showError = false;
$showmessage = false;
include '../../dbconnection.php';
if ($_REQUEST['delete_project_id']) {
    $proj_sql_delete = "DELETE FROM `project` WHERE sno ='" . $_REQUEST['delete_project_id'] . "'";
    $resultset = mysqli_query($conn, $proj_sql_delete);
    if ($resultset) {
        $showmessage = true;
    } else {
        $showError = true;
    }
}

if ($showmessage) {
    echo "<script>alert('Project successfully deletsed.');window.location.replace('../projects.php');</script>";

}

if ($showError) {
    echo "<script>alert('try again.')</script>";
}
?>