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
    <script src="./sweetalert.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("user_Ida2B4h3hA1PCx42QkSUZ");
        })();
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
                // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sql = "SELECT * FROM users WHERE user_name = (SELECT owner_id FROM shop WHERE shop_id = (SELECT shop_id FROM products WHERE product_id='$productid'))";
                $res = mysqli_query($conn, $sql);
                $r = mysqli_fetch_assoc($res);
                $user = $_SESSION['username'];
                $sql1 = "SELECT * FROM users WHERE user_name ='$user' ";
                $res1 = mysqli_query($conn, $sql1);
                $cust = mysqli_fetch_assoc($res1);
                $msg = "Hello " . $r['user_name'] . ", " . $cust['name'] . " is interested in buying " . $row['product_title'] . " (Product ID:" . $productid . "). Kindly contact the customer at: " . $cust['email'];
                // }
                ?>
                <script>
                    var user = '<?= $user ?>';
                    var mail = '<?= $r['email'] ?>';
                    var msg = '<?= $msg ?>';
                    // console.log(name);
                    // console.log(mail);
                    // console.log(msg);

                    function sendmail(seller_mail, msg, customer) {
                        console.log(customer);
                        console.log(seller_mail);
                        emailjs.init('user_Ida2B4h3hA1PCx42QkSUZ');
                        emailjs.send("service_5ojsiec", "template_iz8lq9p", {
                            from_name: customer,
                            to_name: seller_mail,
                            message: msg,
                        }).then(
                            function(response) {
                                console.log("SUCCESS!", response.status, response.text);
                                swal({
                                    title: "ENQUIRY REQUEST SENT",
                                    text: "Seller will contact you soon!",
                                    icon: "success",
                                    button: "OK",
                                });
                            },
                            function(error) {
                                console.log("FAILED...", error);
                                swal({
                                    title: "REQUEST FAILED",
                                    text: "Please retry!",
                                    icon: "error",
                                    button: "OK",
                                    timer: 2500,
                                });
                            }
                        );
                    }
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

                <button class="btn" name="sendmail" onclick="sendmail(mail,msg,user)">Request Details</button>

            </div>
        </div>
    </div>
    </div>
</body>

</html>