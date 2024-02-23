<?php
require 'admin\dbconnect.php';


?>
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

    <style>
               /* ------------------------content firth----------------------------------- */
        .content-4 {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        #carouselExampleIndicators {
            width: 98%;
        }

        .carousel-inner {
            width: 100%;

        }

        /* ------------------------latest product--------------------------------- */
        .latest_product {
            max-width: 100%;
            height: fit-content;
            padding: 20px 30px;
            background-color: white;
            margin: 15px;
            

        }

        .l-line {
            text-align: center;
            font-weight: 600;
        }

        .product-list {
            max-width: 100%;
            margin-top: 25px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .p-item {
            height: 330px;
            width: 220px;
            
        }

        .p-item img {
            width: 200px;
            height: 210px;
        }

        .p-item span {
            display: flex;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["loginsuccess"]) && $_GET["loginsuccess"] == true) {
        echo '<div  class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Login Done!</strong> Enjoy your Shopping.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } elseif (isset($_GET["loginfailed"]) && $_GET["loginfailed"] == true) {
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Login failed!</strong> Check your credentials.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } elseif (isset($_GET["registerFailed"]) && $_GET["registerFailed"] == true) {
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Email already exist use different email.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } elseif (isset($_GET["registerDone"]) && $_GET["registerDone"] == true) {
        echo '<div  class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registeration Done!</strong> Check your email to verify account.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } elseif (isset($_GET["PasswordNotMAtched"]) && $_GET["PasswordNotMAtched"] == true) {
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Password Do not matched Check again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    

    ?>
    <?php
    include 'navbar.php';
    ?>
    <!-- caraousal -->
    <div class="content-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $sql = "SELECT * FROM `banner`";
                $result = $connt->query($sql);
                $active = true; // To track the first item as active
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">
                        <img src="./admin/banner_image/' . $row["img"] . '" class="d-block w-100" alt="...">
                    </div>';
                        $active = false; // Set active to false after the first item
                    }
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="latest_product">
        <h4 class="l-line"> Latest Product</h4>
        <div class="product-list">
            <?php
           
            $sql = "SELECT * FROM `product` WHERE `status`= 1 ORDER BY `product_id` DESC LIMIT 5 ";
            $result = $connt->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $formatedprice = number_format($row["price"]);
                    $formatedmrp = number_format($row["mrp"]);
                    echo '<a href="product.php?category_name='.$row["product_cat_name"].'&product_id='.$row["product_id"].'" style="text-decoration:none; color:#3a3a3a;"><div class="p-item">
        <img src="./admin/product_image/' . $row["img"] . '" alt="">
        <div style="margin-left: 15px;margin-top:15px; position:relative;">
        <h6>' . substr($row["name"], 0, 40) . '...</h6>
        <span><h3>₹</h3><h5 style="margin-top: 5px; margin-left:6px;">' . $formatedprice . '</h5><del style="margin-top: 6px; margin-left:11px; color:orange;">' . $formatedmrp . '</del></span>
        </div>
        </div></a>';
                }
            }

            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>