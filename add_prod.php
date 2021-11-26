<?php

$output_dir = "upload/";/* Path for file upload */
$RandomNum   = time();
$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
$ImageType      = $_FILES['image']['type'][0];

$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt       = str_replace('.','',$ImageExt);
$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
  $ret[$NewImageName]= $output_dir.$NewImageName;

/* Try to create the directory if it does not exist */
if (!file_exists($output_dir))
{
  @mkdir($output_dir, 0777);
}               
move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
     
  if (mysqli_query($conn, $sql)) {
    echo "successfully added !";
  }
  else {
  echo "Error: " . $sql . "" . mysqli_error($cn);
 }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include './db_connect.php';
   session_start();
   $prod_name=$_POST['prod_name'];
   $prod_desc=$_POST['prod_desc'];
   $prod_price=$_POST['price'];
   $prod_tax=$_POST['prod_tax'];
   $sql = "INSERT INTO `products` ( `product_desc`, `tax_code`, `product_title`, `price`, `status`, `image`, `timestamp`) VALUES ('$prod_desc', '$prod_tax', '$prod_name', 'prod_price', '1', '$NewImageName', current_timestamp()); ";
  $res = mysqli_query($conn, $sql);
  
  if (!$res) {
    die("SQL query failed: " . mysqli_error($conn));
  }
  $num = mysqli_num_rows($res);
  $row = mysqli_fetch_assoc($res);
  if ($num <= 0) {
    echo "Created products";
  } else {
     
  }
   
}
    
?>