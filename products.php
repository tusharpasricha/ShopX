<?php
require('./login/db_connect.php');
require_once('getfunction.php');
session_start();
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

</head>

<body>
    <div class="box1">
        <div id="menu">
            <?php
            include('nav_c.php');
            echo addMenu("customer");
            ?>
        </div>
        <?php
            if(isset($_GET['s_id'])){
                $shopid = $_GET['s_id'];
            }
            if (isset($shopid)) {
                $products = get_allproducts($shopid);
                $res_shopname=mysqli_query($conn,"SELECT * FROM shop WHERE shop_id = '$shopid'");
                $shopname = mysqli_fetch_array($res_shopname);

               ?>
        <div class="box2">
            <h4><?php echo strtoupper($shopname['shop_name']); ?></h4>
        </div>
        
        <div class="block">
        
            <?php
                
                
                while ( $row = mysqli_fetch_assoc($products) ) {
                    //<?php echo "upload/" . $row['image'];
            ?>
                    <div class="card">
                        <img src="<?php echo "upload/" . $row['image']; ?>" alt="shoe"  width="100%" height="85%" style="align-items: center;">
                        <div class="container">
                            <h6><b><?php $row['product_title']; ?> </b>
                            </h6>
                            <a href="viewproduct.php?p_id=<?php echo $row['product_id'] ?>"><button class="enter">View Product</button></a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>


        </div>

</body>

</html>