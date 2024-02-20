<!-- This database file for Contact Form data -->
<?php

include 'connection.php';

$name = $_POST['nm'];
$email = $_POST['eml'];
$phone = $_POST['phn'];
$subject = $_POST['sub'];
$message = $_POST['msg'];

$query = "insert into safezone_contact_data (Name,Email,Phone,Subject,Message) values ('$name','$email','$phone','$subject','$message')";

header('location:contact.php');

if (mysqli_query($connect, $query)) {
    echo "<script>alert('Data has been submitted....');</script>";
} else {
    die("Something went wrong !!!" . mysqli_error($connect));
}

?>