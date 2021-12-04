<?php
require('./login/db_connect.php');


function get_product($prod_id){
   global $conn;
   if($prod_id!=''){
      $query="SELECT * FROM products where product_id='$prod_id'";
      return $result=mysqli_query($conn,$query);
   }  
}

function get_allproducts($shop_id){
   global $conn;
   if($shop_id!=''){
      $query="SELECT * FROM products where shop_id='$shop_id' ";
      return $result=mysqli_query($conn,$query);
   }
}



?>
