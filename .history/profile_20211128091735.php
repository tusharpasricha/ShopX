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


<script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click",
        function() {
            console.log("click");
            document.querySelector("body").classList.toggle("active");
        }
    )
</script>

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
            <h4>ADD PRODUCTS</h4>
        </div>
        <form action="./add_prod.php" method="post" enctype="multipart/form-data">
            <div class="addproduct">
                <div class="vector">
                    <img src="./img/4025692.jpg" alt="" width="370px" height="370px">
                </div>
                <div class="productform">
                   
                    <div class="txtfield">
                        <input type="file" id="image-input" accept="image/*">
                        <!-- <input class="form-control"  type="number"> -->
                    </div>
                    <br>
                    <div class="txtfield">
                        <label>Caption</label>
                        <input class="form-control" type="text">
                    </div>
                    <br>
                    <button class="btn">Add</button>
                </div>
            </div>


    </div>
    </form>
</body>

</html>