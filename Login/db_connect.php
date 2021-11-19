<?php
$username="root";
$password="";
$database="shopx6502";
$server="localhost";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("error".mysqli_connect_error());
}
echo "hello";
?>