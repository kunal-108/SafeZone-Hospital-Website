<!-- This database file for Email data -->
<?php 

include 'connection.php';

$email = $_POST['email'];

$query = "insert into safezone_email_data (Email) values ('$email')";

header('location:index.php');

mysqli_query($connect, $query);

?>