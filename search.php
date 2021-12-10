<?php
require('./login/db_connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
   <link rel="stylesheet" href="styleCustomerview.css" />
   <script src="script.js"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <script>
      if (window.history.replaceState) {
         window.history.replaceState(null, null, window.location.href);
      }
   </script>
</head>

<body>
   <div class="box1">
      <div id="menu">
         <?php
         include('nav_c.php');
         echo addMenu("customer");
         ?>
      </div>
      <div class="box2">
         <h4>SEARCH RESULTS</h4>
      </div>
      <div class="block">
         <?php

         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $search = $_POST['search'];
            $sql = "SELECT * FROM  `products` WHERE  product_title LIKE '%$search%' OR product_desc LIKE '%$search%' ORDER BY product_id DESC ";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);

            $noresults = 1;

            if ($num > 0) {
               $noresults = 0;
               while ($row = mysqli_fetch_assoc($res)) {
                  //<?php echo "upload/" . $row['image'];
         ?>
                  <a href="viewproduct.php?p_id=<?php echo $row['product_id'] ?>">
                     <div class="card">
                        <img src="<?php echo "upload/" . $row['image']; ?>" alt="shoe" width="100%" height="85%" style="align-items: center;">
                        <div class="container">
                           <h6><b><?php echo  $row['product_title']; ?> </b></h6>
                        </div>
                     </div>
                  </a>
               <?php
               }
            }
            $sql2 = "SELECT * FROM  `shop` WHERE  shop_name LIKE '%$search%' ORDER BY shop_id DESC ";
            $res2 = mysqli_query($conn, $sql2);
            $num2 = mysqli_num_rows($res2);
            if ($num2 > 0) {
               $noresults = 0;
               while ($row2 = mysqli_fetch_assoc($res2)) {

               ?>
                  <a href="products.php?s_id=<?php echo $row2['shop_id'] ?>">
                     <div class="card">
                        <img src="img/shop1.png" alt="shop" style="width:110%" height="80%" style="align-items: center;">
                        <div class="container">
                           <h6><b><?php echo $row2['shop_name'];  ?></b></h6>
                        </div>
                     </div>
                  </a>


         <?php
               }
            }
            if ($noresults == 1) {
               echo "no results";
            }
         }
         ?>
      </div>

   </div>

</body>

</html>