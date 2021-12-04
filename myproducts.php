<?php
require('./login/db_connect.php');
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
            include('nav_s.php');
            echo addMenu("mp");
            ?>
        </div>
        <div class="box2">
            <h4>PRODUCTS</h4>
        </div>

        <div class="block" style="align-items: center ">
            <div class="card">
                <br><br>
                <img src="./img/add.png" alt=" item" style="width:40%" height="40%" style="align-items: center">
                <div class="container">
                    <br>
                    <a href="seller.php"><button class="enter">Add Product</button></a>
                </div>

            </div>
            <?php
            // include './login/db_connect.php';
            // session_start();
            $sid = $_SESSION["shopid"];

            $sql = "SELECT * FROM `products` where shop_id='$sid' ORDER BY timestamp DESC";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);

            if ($num <= 0) {
                echo "no product";
            }
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="card">
                    <img src="<?php echo "upload/" . $row['image']; ?>" alt=" item" style="width:90%" height="60%" style="align-items: center">
                    <div class="container">
                        <h6><b><?php echo $row['product_title'];  ?></b></h6>
                        <a href="./viewproduct_s.php"><button class="enter">View Product</button></a>
                    </div>
                </div>
            <?php
            }

            ?>


</body>

</html>