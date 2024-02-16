<?php
$servername = "localhost";
$username = "root";
$password = "03302411283";
$dbname = "todolist";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error Connecting to Server" . mysqli_connect_error());
}
?>