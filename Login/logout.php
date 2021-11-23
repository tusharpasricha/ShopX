<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
echo "Logging you out. Please wait...";
session_destroy();
}
header("Location: ./login.php")
?>