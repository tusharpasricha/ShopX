<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   include './db_connect.php';

   $username = $_POST["username"];
   $password = $_POST["password"];
   $_SESSION['username'] = $username;

   $sql = "SELECT * from users where user_name ='$username'and cpassword ='$password' ";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   $row = mysqli_fetch_assoc($res);
   if ($num <= 0) {
      $_SESSION['status'] = "Invalid Credentials!";
      $_SESSION['status_code'] = "error";
      // header("Location:./login.php");
   } else {

      $sql2 = "SELECT * from shop where owner_id = '$username' ";
      $query = mysqli_query($conn, $sql2);
      $data = mysqli_fetch_assoc($query);


      if ($row['acc_type'] == 1101) {
         $_SESSION['loggedin'] = true;
         $_SESSION['acc_type'] = $acc_type;
         $shopid = $data['shop_id'];
         $_SESSION['shopid'] = $shopid;
         $sql1 = "SELECT * from shop where owner_id='$username'";
         $check = mysqli_query($conn, $sql1);
         $fetchshop = mysqli_fetch_assoc($check);
         if (!$fetchshop['shop_id']) {
            $_SESSION['status'] = "Your Signup was Successful! Register your shop!";
            $_SESSION['status_code'] = "success";
            header("Location:./shopregister.php");
         } else {
            $_SESSION['status'] = "Login Successful!";
            $_SESSION['status_code'] = "success";
            header("Refresh: 1;url=../newsfeed_s.php");
         }
      } else if ($row['acc_type'] == 1102) {
         $_SESSION['loggedin'] = true;
         $_SESSION['acc_type'] = $acc_type;

         $_SESSION['status'] = "Login Successful!";
         $_SESSION['status_code'] = "success";
          header('Refresh: 1;url=../customer.php');
      }
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
            <div class="login">
               <div class="box2">
                  <form action="../login/login.php" method="post" onsubmit="login()" id="loginForm">
                     <center><small><span id="error" style="color: red"></span></small></center>
                     <h2>Login</h2>
                     <div class=" txt_field mt-4 mb-3">
                        <span></span>
                        <label for="exampleInputEmail1 ">User Name</label>
                        <input type="text" placeholder="Username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                     </div>
                     <div class=" txt_field mb-3">
                        <span></span>
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" placeholder="Password" name="password" class="form-control" id="exampleInputPassword1" required>
                     </div>

                     <button type="submit" class="btn ">Sign In</button>
                     <br>

                  </form>
                  <div class="sign">
                     New Member?
                     <a href="../Login/signup.php"> Sign Up </a>
                     <br>
                     <!-- <a href="../seller.php">Seller View</a>
                     <br>
                     <a href="../customer.php">Customer View</a> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="cont2">
            <a href="../dc.php">
               <img src="../img/landin page vector.png" alt="" width="660px" height="630px">
            </a>
         </div>
      </div>
   </div>

   <?php require("./alert.php"); ?>
</body>

</html>