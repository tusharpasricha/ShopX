<style>
    .topnav {
        margin-left: 180px;
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
        margin-right: 40px;
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
        background-image: url("./img/search.png");
        background-size: 20px 20px;
        background-position: 190px;
        background-repeat: no-repeat;
    }

</style>
<?php



function addMenu($pageName)
{
    $menu = '

        <nav>
        <div class="nav-center">
            <div class="nav-header">
                <h1>ShopX</h1>
            </div>
            <div class="topnav">
                <a href="./customer.php" '  . ($pageName == "customer" ? "class=\"active\"" : "") . '  >Home</a>
                <a href="./newsfeed_c.php"  ' . ($pageName == "newsfeed" ? "class=\"active\"" : "") . '>Newsfeed</a>
                <div class="search-container">
                    <form action="./search.php" method="POST">
                        <input type="text" placeholder="Search.." name="search" autocomplete="off" rows:"1" cols:"15" minlength:"4">
                    </form>
                </div>
                
            </div>
                <div class="profile">
                    <p>Welcome ' . strtoupper($_SESSION['username']) . '! </p>
                    <a href="./login/logout.php"><img src = "./img/logout.png" width = "30px" height = "30px" style = "margin-left: 20px;"></a>
                </div>

        </div>
    </nav>';
    return $menu;
}
?>