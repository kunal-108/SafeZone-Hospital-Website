<!-- Database connection file -->
<?php

$ServerName = "localhost";
$ServerUser = "root";
$ServerPassword = "";
$ServerDB = "safezone_DB";

$connect = mysqli_connect($ServerName, $ServerUser, $ServerPassword, $ServerDB);
if (!$connect) {
    die("Something went wrong !!!" . mysqli_error($connect));
}

?>