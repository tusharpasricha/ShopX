<?php
require("./login/alert.php");

$output_dir = "posts/";/* Path for file upload */
$RandomNum = time();
$ImageName = str_replace(' ', '-', strtolower($_FILES['post_image']['name'][0]));
$ImageType = $_FILES['post_image']['type'][0];

$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt = str_replace('.', '', $ImageExt);
$ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
$NewImageName = $ImageName . '-' . $RandomNum . '.' . $ImageExt;
$ret[$NewImageName] = $output_dir . $NewImageName;

/* Try to create the directory if it does not exist */
if (!file_exists($output_dir)) {
  @mkdir($output_dir, 0777);
} else {
  move_uploaded_file($_FILES['post_image']['tmp_name'], $output_dir . $NewImageName);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include './login/db_connect.php';


  $post_image = $NewImageName;
  $caption = $_POST['caption'];
  $user = $_SESSION['shopid'];
  $sql = "INSERT INTO `posts` ( `photo`, `caption`,`user_id`) VALUES ('$post_image', '$caption','$user'); ";
  $res = mysqli_query($conn, $sql);

  if (!$res) {
    die("SQL query failed: " . mysqli_error($conn));
    $_SESSION['status'] = "ERROR OCCURED!";
    $_SESSION['status_code'] = "error";
  } else {
    header("Location:./profile.php");
    echo "post created";
  }
}
