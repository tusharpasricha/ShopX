<?php
require('./Login/alert.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $err = false;
   include './db_connect.php';
   $sname = $_POST["sname"];
   strtoupper($sname);
   $gstin = $_POST["gstin"];
   strtoupper($gstin);
   $locality = $_POST["locality"];
   $state = $_POST["state"];
   $city = $_POST["city"];
   $pincode = $_POST["pincode"];
   $owner_id = $_SESSION['username'];

   $query = "INSERT INTO `shop` (`owner_id`, `gst_in`, `shop_name`, `state`, `city`, `pincode`, `address`) VALUES ('$owner_id', '$gstin', '$sname', '$state', '$city', '$pincode', '$locality')";
   $result = mysqli_query($conn, $query);
   if ($result) {
      $sql1 = "SELECT * from shop where owner_id = '$owner_id'";
      $query = mysqli_query($conn, $sql1);
      $data = mysqli_fetch_assoc($query);
      $shopid = $data['shop_id'];
      $_SESSION['shopid'] = $shopid;
      header("Location:../seller.php");
   } else {
      echo  mysqli_error($conn);
   }
}
?>



<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ShopX</title>
   <link rel="stylesheet" href="../home.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<script>
   if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
   }
</script>

<body>
   <div class="box">
      <!-- <div class="bar">

        </div> -->
      <div class="block">
         <div class="cont3">
            <div class="signup">
               <div class="box2">
                  <form action="../login/shopregister.php" method="post" id="loginForm">
                     <h2>Create your Shop</h2>
                     <div class="txt_field mb-3">
                        <label for="exampleInputEmail1" class="form-label">Shop Name</label>
                        <input type="text" name="sname" placeholder="Shop Name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required minlength="5">
                     </div>
                     <div class="txt_field mb-3">
                        <label for="exampleInputEmail1" class="form-label">GSTIN</label>
                        <input type="alphanumeric" name="gstin" placeholder="GSTIN" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required minlength="15" maxlength="15">
                     </div>
                     <div class="txt_field mb-3">
                        <label for="exampleInputEmail1" class="form-label">Locality</label>
                        <input type="text" name="locality" placeholder="Locality" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
                     </div>
                     <div class="txt_field mb-3">
                        <label for="exampleInputEmail1" class="form-label">State</label>
                        <input type="text" name="state" placeholder="State" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
                     </div>
                     <div class="txt_field mb-3">
                        <label for="exampleInputEmail1" class="form-label">City</label>
                        <input type="text" name="city" placeholder="City" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
                     </div>
                     <div class="txt_field mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pincode</label>
                        <input type="numeric" name="pincode" placeholder="Pincode" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required minlength="6" maxlength="6">
                     </div>

                     <button type="submit" class="btn"> Create</button>
                  </form>
               </div>
            </div>
         </div>

         <div class="cont2">
            <img src="../img/landin page vector.png" alt="" width="660px" height="630px">
         </div>
      </div>
   </div>
</body>

</html>