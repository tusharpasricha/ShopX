<?php
require("./login/alert.php");

$output_dir = "upload/";/* Path for file upload */
$RandomNum = time();
$ImageName = str_replace(' ', '-', strtolower($_FILES['image']['name'][0]));
$ImageType = $_FILES['image']['type'][0];

$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt = str_replace('.', '', $ImageExt);
$ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
$NewImageName = $ImageName . '-' . $RandomNum . '.' . $ImageExt;
$ret[$NewImageName] = $output_dir . $NewImageName;

/* Try to create the directory if it does not exist */
if (!file_exists($output_dir)) {
  @mkdir($output_dir, 0777);
} else {
  move_uploaded_file($_FILES['image']['tmp_name'], $output_dir . $NewImageName);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include './login/db_connect.php';

  $shopid = $_SESSION['shopid'];
  $prod_name = $_POST['prod_name'];
  $prod_desc = $_POST['prod_desc'];
  $prod_price = $_POST['price'];
  $sql = "INSERT INTO `products` ( `product_desc`, `shop_id`, `product_title`, `price`, `status`, `image`, `timestamp`) VALUES ('$prod_desc', '$shopid', '$prod_name', '$prod_price', '1', '$NewImageName', current_timestamp()); ";
  $res = mysqli_query($conn, $sql);

  if (!$res) {
    die("SQL query failed: " . mysqli_error($conn));
    $_SESSION['status'] = "ERROR OCCURED!";
    $_SESSION['status_code'] = "error";
  } else {
    header("Location:./myproducts.php");
  }
}
