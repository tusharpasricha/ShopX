
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
        <nav>
            <div class="nav-center">
                <div class="nav-header">
                    <h1>ShopX</h1>
                    <button class="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="toogle__items">
                    <ul class="links">
                        <li>
                            <a href="./newsfeed_s.php">News feed</a>
                        </li>
                        <li>
                            <a href="./seller.php">Add Products</a>
                        </li>
                        <li>
                            <a href="./myproducts.php">My Products</a>
                        </li>
                        <li>
                            <a href="./login/logout.php">Logout</a>
                        </li>
                    </ul>
                    <div class="profile">
                        <p>Classic Fashion Store</p>
                    </div>
                </div>
            </div>
        </nav>
        <div class="box2">
            <h4>PRODUCTS</h4>
        </div>

        <div class="block" style="align-items: center ">
        <?php 
    include './login/db_connect.php';
    session_start();

    $sql = "SELECT * FROM `products` ";
      $res = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($res);
      
      if ($num <= 0) {
        echo "something went wrong";
      } 
    while($row = mysqli_fetch_assoc($res)){
?>
               <div class="card" >
                <img src="<?php echo "upload/".$row['image']; ?>" alt=" item" style="width:90%" height="60%" style="align-items: center">
                <div class="container">
                    <h6><b><?php echo $row['product_title'] ;  ?></b></h6>
                    <button class="enter">View Product</button>
                </div>
            </div>
            <?php
            }
        
            ?>
            
        </div>

</body>

</html>