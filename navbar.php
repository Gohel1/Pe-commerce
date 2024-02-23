<?php
session_start();
include 'admin/dbconnect.php';
include 'login_modal.php';
include 'register_modal.php';

echo '

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" />
</head>
<style>
    /*---------------- first content----------------------------  */

    .content-1 {
        max-width: 100%;
        height: 45px;
        margin: 0 15px;
        background-color: whitesmoke;
        display: flex;
        align-items: center;
        padding: 0 35px;
        justify-content: space-between;
    }

    .content-1 h4:hover {
        color: #e57200;
        transition: 0.3s;
    }

    .c1-2 {
        display: flex;
        align-items: center;
    }

    /* ---------------second content and their log------------------ */
    .content-2 {
        max-width: 100%;
        background-color: #FAFAFA;
        height: 80px;
        display: flex;
        margin: 0 15px;
        justify-content: space-between;
        /* gap: 2%; */
        padding: 0 35px;
        align-items: center;

    }

    .clogo img {
        width: 210px;
        height: 60px;
    }

    /* -------------search bar and search button----------------- */
    .searchbar {
        width: auto;
        
    }

    .search {
        width: 420px;
        height: 44px;
        font-size: 16px;
        color: gray;
        padding-left: 25px;
        border: 1px solid #dddddd;
        outline: none;
    }

    .search::placeholder {
        font-size: 16px;
    }

    #s-button {
        font-size: 28px;
        padding: 7px;
        border: 1px solid #dddddd;
        background-color: #ff8e15;
        position: absolute;
    }

    /* ---------------navbar icon and names---------------- */
    .navicon {
        display: flex;
        max-width: auto;
        gap: 30px !important;
        /* margin-left: 90px; */
        margin-top: 8px;
    }

    #c-icon {
        font-size: 35px;
    }

    .navname {
        font-size: 16px;
        font-family: sans-serif;
        color: gray;
        font-weight: 500;
        margin-top: -2px;

    }

    .profiledown {
        position: relative;
        display: inline-block;
    }

    .drop {
        background-color: white;
        width: 250px;
        position: absolute;
        top: 60px;
        /* Adjust this value according to your layout */
        right: 0;
        /* Adjust this value according to your layout */
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 15px 0 rgba(0, 0, 0, 0.19);
        display: none;
        z-index: 1;
    }

    .profiledown:hover .drop {
        display: block;
    }

    .drop1 {
        width: 250px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 25px;
    }

    .drop1 .sign-part {
        width: 130px;
        color: while;
        text-align: center;
        background-color: rgb(59, 59, 59);
        font-family: sans-serif;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 0;
        border-radius: 3px;
    }

    .sign-part:hover {
        background-color: #ff8e15;
        transition: 0.3s;
    }

    .log-button {
        font-family: sans-serif;
        font-size: 14px;
        color: gray;
        margin-top: 15px;
    }

    .log-button a {
        text-decoration: none;
        color: gray;
    }

    .log-button a:hover {
        color: #ff8e15;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ul li {
        padding: 8px 0 8px 40px;
        font-family: sans-serif;
        font-size: 15px;
        color: gray;
    }
    
    ul li:hover {
        color: #ff8e15;
        background-color: rgb(236, 236, 236);
    }

    /* ---------------------------content third----------------------------- */

    .content-3 {
        max-width: 100%;
        height: 45px;
        background-color: whitesmoke;
        display: flex;
        margin: 0 15px;
        padding: 0 150px;
        justify-content: center;
        align-items: center;
    }

    .content-3 a {
        margin: 0 35px;
        font-size: 16px;
        text-decoration: none;
        color: gray;


    }

    .content-3 a:hover {
        color: #e57200;
    }
    div .filelinks{
        text-decoration: none;
        color:#3f3f3f;
    }
</style>

<body>
    <!-- <div class="content-1">
            <div class="c1-1">
                Follow us
                <img src="png\002-facebook.png" style="margin-left:4px; margin-right: 5px;">
                <img src="png\003-instagram.png" style=" margin-right: 5px;">
                <img src="png\001-telegram.png">
            </div>
            <div class="c1-2">
                <span class="material-symbols-outlined" style="font-weight: 400;">phone_iphone</span>
                <h4 style="font-size: 15px; font-weight:400; margin-top:8px;">+91-98653 78541</h4>
                <div style="border-left: 0.5px solid #4A4A4A; height:30px; margin-left:10px; margin-right:10px;"></div>
                <span class="material-symbols-outlined">local_shipping</span>
                <h4 style="font-size: 15px; font-weight:400; margin-top:8px; margin-left:6px;">Track Order</h4>
                <div style="border-left: 0.5px solid #4A4A4A; height:30px; margin-left:10px; margin-right:10px;"></div>
                <span class="material-symbols-outlined">help</span>
                <h4 style="font-size: 15px; font-weight:400; margin-top:8px; margin-left:6px;">Help Center</h4>
            </div>
</div> -->

    <div class="content-2">
        <div class="clogo">
            <a href="index.php"><img src="png\logo.png"></a>
        </div>
        <div class="searchbar">
            <input type="text" name="search" class="search" placeholder="Search Category, Product & More...">
            <span class="material-symbols-outlined" id="s-button">search</span>
        </div>';
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo ' <div class="log-user" style="margin-top:12px; font-size:18px; width:auto;">
                    <p > *Welcome ' . $_SESSION['username'] . '</p>
                  </div>
                  <div class="navicon">
            <!-- <div>
                <span class="material-symbols-outlined" id="c-icon" style="margin-left: 2px; color:#ffa542">storefront</span>
                <h6 class="navname">Store</h6>
            </div> -->
            <div class="profiledown">
                <span class="material-symbols-outlined" id="c-icon" style="margin-left: 4px;">account_circle</span>
                <h6 class="navname">Profile</h6>

                <div class="drop">
                    <div class="drop1">
                        <a class="sign-part" href="logout_handler.php" style="color:white;">Log Out</a>
                    </div>
                    <div style="border-bottom: 0.5px solid #dddddd; margin-top: 21px;"></div>
                    <div class="list">
                        <ul>
                        <a href="" style="text-decoration:none;"><li>My Profile</li></a>
                            <a href="" style="text-decoration:none;"><li>My Order</li></a>
                            <a href="my-cart.php" style="text-decoration:none;"><li>My cart</li></a>
                            <a href="" style="text-decoration:none;"><li>My Wishlist</li></a>
                            <a href="" style="text-decoration:none;"><li>Saved Address</li></a>
                            <a href="help-center.php" style="text-decoration:none;"><li>Help Center</li></a>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <span class="material-symbols-outlined" id="c-icon" style="margin-left: 15px;">favorite</span>
                <h6 class="navname">Wishlist (0)</h6>
            </div>
            <div>
                <a href="my-cart.php" class="filelinks"><span class="material-symbols-outlined" id="c-icon" style="margin-left: 8px;">shopping_cart</span>
                <h6 class="navname">Cart (' . $count . ')</h6></a>
            </div>
        </div>
    </div>';
} else {
    echo ' <div class="log-user" style="margin-top:12px; font-size:18px; width:auto;">
                    <p > *Welcome Guest</p>
                  </div>
                  <div class="navicon">
            <!-- <div>
                <span class="material-symbols-outlined" id="c-icon" style="margin-left: 2px; color:#ffa542">storefront</span>
                <h6 class="navname">Store</h6>
            </div> -->
            <div class="profiledown">
                <span class="material-symbols-outlined" id="c-icon" style="margin-left: 4px;">account_circle</span>
                <h6 class="navname">Profile</h6>

                <div class="drop">
                    <div class="drop1">
                        <a class="sign-part" href="" data-toggle="modal" data-target="#signInModal" style="color:white;">SIGN IN</a>
                        <span class="log-button"> New Customer? &nbsp;&nbsp;<a href="" data-toggle="modal" data-target="#signUpModal">Start here</a></span>
                    </div>
                    <div style="border-bottom: 0.5px solid #dddddd; margin-top: 21px;"></div>
                    <div class="list">
                        <ul>
                            <li>My Profile</li>
                            <li>My Order</li>
                            <li>My Wishlist</li>
                            <li>My Cart</li>
                            <li>Saved Address</li>
                            <li>Help Center</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <span class="material-symbols-outlined" id="c-icon" style="margin-left: 15px;">favorite</span>
                <h6 class="navname">Wishlist (0)</h6>
            </div>
            <div>
            <a href="my-cart.php" class="filelinks"> <span class="material-symbols-outlined" id="c-icon" style="margin-left: 8px;">shopping_cart</span>
                <h6 class="navname">Cart (' . $count . ')</h6> </a>
            </div>
        </div>
    </div>';
}



echo '<nav class="content-3">';
$sql = "SELECT * FROM `category` WHERE `status`=1";
$result = $connt->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $category_name = $row["category_name"];
        echo '  <a href="category.php?category_name=' . $category_name . '">' . $category_name . '</a>';
    }
}

echo '</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        // Close the alert after 5 seconds
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").alert(\'close\');
            }, 3000);
        });
    </script>


</body>

</html>';
