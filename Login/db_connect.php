<?php
$username="root";
$password="";
$dataabse="shopx6502";
$server="localhost";

$conn=mysqli_connect($server,$username,$password,$dataabse);
if(!$conn){
    die("error".mysqli_connect_error());
}
echo "hello";
?>