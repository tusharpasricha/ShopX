<?php
require('./login/db_connect.php');
require_once('getfunction.php');

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <!-- <script type="text/javascript">
        (function() {
            emailjs.init("user_Ida2B4h3hA1PCx42QkSUZ");
        })();
    </script>
    <script type="text/javascript" src="./email.js"></script> -->
    <script>
    function sendmail(customer, seller_mail, msg) {
    console.log('SUCCESS!');
    emailjs.init('user_Ida2B4h3hA1PCx42QkSUZ');
    emailjs.send(service_5ojsiec, template_iz8lq9p, {
        from_name: customer,
        to_name: seller_mail,
        message: msg,
    });
}
    </script>
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<body>
    <div class="box1">
        <div id="menu">
            <?php
            include('nav_c.php');
            echo addMenu("customer");
            ?>
        </div>
        <div class="box2">
            <!-- <h4>ADD PRODUCTS</h4> -->
        </div>
        <div class="addproduct">
            <div class="productdetail">


                <?php
                if (isset($_GET['p_id'])) {
                    $productid = $_GET['p_id'];
                }
                if (isset($productid)) {
                    $products = get_product($productid);

                    $row = mysqli_fetch_assoc($products);
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $sql = "SELECT * FROM users WHERE user_name = (SELECT owner_id FROM shop WHERE shop_id = (SELECT shop_id FROM products WHERE product_id='$productid'))";
                    $res = mysqli_query($conn, $sql);
                    $r = mysqli_fetch_assoc($res);
                    $msg = "Hello " . $r['user_name']; 
                }
                ?>
                <script>
                    let name = '<?= $_SESSION['username'] ?>';
                    let mail = '<?= $r['email'] ?>';
                    let msg = '<?= $msg ?>';
                    console.log(name);
                    console.log(mail);
                    console.log(msg);
                </script>

                <img class="image" src="<?php echo "upload/" . $row['image']; ?>" alt="product" ">

                <div class=" description">
                <h1><?php echo $row['product_title']; ?></h1>
                <div class="txtfield">
                    <p><?php echo $row['product_desc']; ?></p>
                </div>
                <br>
                <div class="txtfield">
                    <h1>₹ <?php echo $row['price']; ?> /-</h1>
                </div>
                <form method="post" action="viewproduct.php?p_id=<?php echo $row['product_id']; ?>">
                    <button class="btn" name="sendmail" onsubmit="sendmail(name, mail, msg)">Request Details</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>