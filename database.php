<?php
$server = "localhost";
$database = "slang";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset($conn , "utf8");
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
