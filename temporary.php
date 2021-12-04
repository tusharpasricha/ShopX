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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/0206006232.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js "></script>
    <style>
        .topnav {
            margin-left: 200px;
            overflow: hidden;
        }

        .topnav a {
            position: relative;
            display: inline-block;
            border-radius: 20px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            text-transform: uppercase;
        }

        .topnav a:hover {
            background-color: #fdbc0c;
            color: white;
        }

        .topnav a.active {
            background-color: #fdbc0c;
            color: white;
        }

        .topnav .search-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            margin-left: 16px;
            font-size: 17px;
            text-indent: 15px;
            border: none;
            background: white;
            border-radius: 30px;
            outline: none;
        }

        .fa-heart-o {
            color: red;
            cursor: pointer;
        }

        .fa-heart {
            color: red;
            cursor: pointer;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#heart").click(function() {
                if ($("#heart").hasClass("liked")) {
                    $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                    $("#heart").removeClass("liked");
                } else {
                    $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                    $("#heart").addClass("liked");
                }
            });
        });
    </script>
</head>

<body>
    <div class="box1">
        <div id="menu">
            <?php
            include('nav_c.php');
            echo addMenu("newsfeed");
            ?>
        </div>
        <div class="box2">
            <h4>NEWS FEED</h4>
        </div>

        <div class="newsfeeds">
            <div class="newscard">
                <h6><b>Classic Fashion Store</b></h6>
                <img src="./img/product3.jfif" alt="post" width="260px">
                <div class="Caption">

                    <p>New Product Added Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, error.
                    </p>
                    <span id=heart><i class="fa fa-heart fa-2x" aria-hidden="true"></i> </span>
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
    </div>
</body>

</html>