<?php
    require('./login/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="styleCustomerview.css" />
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
                            <a href="#">home</a>
                        </li>
                        <li>
                            <a href="newsfeed.html">News Feed</a>
                        </li>
                       
                        <li>
                            <a href="./login.html">Logout</a>
                        </li>
                    </ul>
                    <div class="profile">
                        <p>Tushar Pasricha</p>

                    </div>
                </div>
            </div>
        </nav>
        <div class="box2">
            <h4>SHOPS</h4>
        </div>
        <div class="block">
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>

                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>

            <div class="card">
                <img src="./img/shop2.jfif" alt="shoe" style="width:80%" height="80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="./img/shop1.jfif" alt="shoe" style="width:80%" height="80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="./img/shop3.jfif" alt="shoe" style="width: 80%" height="80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" height="80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" height="80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoe1.png" alt="shoe" style="width:80%" height="80%" style="align-items: center;">
                <div class="container">
                    <h6><b>Classic Fashion Store</b></h6>
                    <button class="enter"><a href="products.html">Enter</a></button>
                </div>
            </div>
        </div>

        <!-- <div class="feedbox2">
            <div class="feedbox1">
                <h4>NEWSFEEDS</h4>
            </div>
            <div class="newsfeeds">
                <div class="newscard">
                    <h6><b>Classic Fashion Store</b></h6>
                    <img src="./img/product3.jfif" alt="post" width="260px">
                    <div class="Caption">

                        <p>New Product Added Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, error.
                        </p>
                    </div>
                </div>
                <div class="newscard">
                    <h6><b>Classic Fashion Store</b></h6>
                    <img src="./img/product2.jfif" alt="post" width="250px">
                    <div class="Caption">

                        <p>New Product Added Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, error.
                        </p>
                    </div>
                </div>
                <div class="newscard">
                    <h6><b>Classic Fashion Store</b></h6>
                    <img src="./img/product3.jfif" alt="post" width="260px">
                    <div class="Caption">

                        <p>New Product Added Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, error.
                        </p>
                    </div>
                </div>
                <div class="newscard">
                    <h6><b>Classic Fashion Store</b></h6>
                    <img src="./img/product3.jfif" alt="post" width="260px">
                    <div class="Caption">

                        <p>New Product Added Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, error.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
</body>

</html>