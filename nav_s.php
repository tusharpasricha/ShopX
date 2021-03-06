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
                <a href="./myproducts.php" style = "margin-left: 10px;" '  . ($pageName == "mp" ? "class=\"active\"" : "") . '  >My Products</a>
                <a href="./newsfeed_s.php" style = "margin-right: 170px;" ' . ($pageName == "newsfeed" ? "class=\"active\"" : "") . '>Newsfeed</a>
            </div>
            <a href = "./profile.php">
                <div class="profile">
                    <p>Welcome ' . strtoupper($_SESSION['username']) . '! </p>
                </div>
            </a>
                <div class="profile">
                    <a href="./login/logout.php"><img src = "./img/logout.png" width = "30px" height = "30px" style = "margin-left: -10px;"></a>
                </div>

        </div>
    </nav>';
    return $menu;
}
?>