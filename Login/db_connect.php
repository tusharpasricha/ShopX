<?php
$username = "root";
$password = "";
$database = "shopx6506";
$server = "localhost";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("error" . mysqli_connect_error());
}
session_start();

// echo "hello";
