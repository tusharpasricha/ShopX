<?php
include './login/db_connect.php';
session_start();

$product_id = 110014;
$query = "SELECT * FROM products WHERE product_id='$product_id' ";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

    $shopid = $_SESSION['shopid'];
    $prod_name = $_POST['prod_name'];
    $prod_desc = $_POST['prod_desc'];
    $prod_price = $_POST['price'];
    $sql = "UPDATE `products`, SET( `product_desc`, `shop_id`, `product_title`, `price`, `status`, `image`, `timestamp`) VALUES ('$prod_desc', '$shopid', '$prod_name', '$prod_price', '1', '$NewImageName', current_timestamp()); ";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        die("SQL query failed: " . mysqli_error($conn));
    } else {
        header("Location:./viewproduct_s.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="styleSellerview.css" />
    <!-- <script src="script.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
            <h4>EDIT PRODUCT</h4>
        </div>
        <form action="./edit_prod.php" method="post" enctype="multipart/form-data">
            <div class="addproduct">
                <div class="vector">
                    <img src="./img/4025692.jpg" alt="" width="370px" height="370px">
                </div>
                <div class="productform">
                    <div class="txtfield">
                        <input class="form-control" type="text" name="prod_name" value="<?php echo $data['product_title']; ?>" placeholder="Product name" required>
                        <br>
                    </div>

                    <div class="txtfield">
                        <input class="form-control" type="text" name="prod_desc" value="<?php echo $data['product_desc']; ?>" placeholder="Description" required>
                        <br>
                    </div>
                    <div class="txtfield">
                        <input class="form-control" type="number" name="price" value="<?php echo $data['price']; ?>" placeholder="Price" required>
                        <br>
                    </div>
                    <div class="txtfield">

                        <input type="file" id="image" name="image" value="<?php echo $data['image']; ?>" accept="image/*" required>

                    </div>

                    <a href="./myproducts.php"><button class="btn">Edit</button></a>
                </div>
            </div>


    </div>
    </form>

</body>

</html>