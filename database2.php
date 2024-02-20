<!-- This database file for Appointment Form data -->
<?php

include 'connection.php';

$name = $_POST['nme'];
$email = $_POST['el'];
$phone = $_POST['pn'];
$state = $_POST['st'];
$date = $_POST['dt'];
$time = $_POST['tm'];
$department = $_POST['dpmt'];
$doctor = $_POST['dctr'];
$message = $_POST['mssg'];


$query = "insert into safezone_appointment_data (Name,Email,Phone,State,Date,Time,Department,Doctor,Message) values ('$name','$email','$phone','$state','$date','$time','$department','$doctor','$message')";

header('location:index.php');

if (mysqli_query($connect, $query)) {
    echo "<script>alert('Data has been submitted....');</script>";
} else {
    die("Something went wrong !!!" . mysqli_error($connect));
}

?>