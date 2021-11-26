
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

<body class="active">
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">

                        <i class="fas fa-bars"></i>
                        Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="./img/profile.jfif" alt="profile_picture">
                <h6>Classic Fashion Store</h6>
                <!-- <p>Classic Fashion Store</p> -->
            </div>
            <div class="addpost">
                <div class="postform">
                    <div>
                        <label style="color: #adadad; padding-left: 10px;">Image</label>
                    </div>

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
                </div>
                <button class="btn">Post</button>
            </div>
            <div class="postbox">
                <div class="post">
                    <img src="" alt="post" style="width:80%" style="align-items: center;">
                    <div class="caption">
                        <h6><b>Classic Fashion Store</b></h6>
                    </div>
                </div>
                <div class="post">
                    <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                    <div class="caption">
                        <h6><b>Classic Fashion Store</b></h6>
                    </div>
                </div>
                <div class="post">
                    <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                    <div class="caption">
                        <h6><b>Classic Fashion Store</b></h6>
                    </div>
                </div>
                <div class="post">
                    <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                    <div class="caption">
                        <h6><b>Classic Fashion Store</b></h6>
                    </div>
                </div>
                <div class="post">
                    <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                    <div class="caption">
                        <h6><b>Classic Fashion Store</b></h6>
                    </div>
                </div>
                <div class="post">
                    <img src="" alt="shoe" style="width:80%" style="align-items: center;">
                    <div class="caption">
                        <h6><b>Classic Fashion Store</b></h6>
                    </div>
                </div>
            </div>


            <!-- <div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">People</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Perfomance</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div> -->
        </div>


</body>
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
        <form action="./add_prod.php" method="post"  enctype="multipart/form-data">
            <div class="addproduct">
                <div class="vector">
                    <img src="./img/4025692.jpg" alt="" width="370px" height="370px">
                </div>
                <div class="productform">
                    <div class="txtfield">
                        <!-- <label> Product</label> -->
                        <input class="form-control" type="text" name="prod_name" placeholder="Product name" required>
                        <br>
                    </div>
                    <!-- <div class="txtfield">
                <label>Image</label>
                <input class="form-control"  type="image">
                <br>
                </div> -->
                    <div class="txtfield">
                        <!-- <label>Description</label> -->
                        <input class="form-control" type="text" name="prod_desc" placeholder="Description" required>
                        <br>
                    </div>
                    <div class="txtfield">
                        <!-- <label>Price</label> -->
                        <input class="form-control" type="number" name="price" placeholder="Price" required>
                        <br>
                    </div>
                    <div class="txtfield"> 
                        <div class="txtfield">
                            <!-- <label>Price</label> -->
                            <input class="form-control" type="number" name="prod_tax" placeholder="Tax Slab (%)" required>
                            <br>
                        </div>
                        <div class="txtfield">

                            <input type="file" id="image"  name="image" accept="image/*" required>
                            <!-- <input class="form-control"  type="number"> -->
                        </div>

                        <button class="btn">Add</button>
                    </div>
                </div>


            </div>
        </form>
        <!--
        <div class="block">
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="./img/shop2.jfif" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="./img/shop1.jfif" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="./img/shop3.jfif" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                </div>
            </div>

        </div> -->

</body>

</html>