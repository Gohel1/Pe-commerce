<?php

require 'admin/dbconnect.php';

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
        .cpath {
            font-size: 23px;
            color: #3a3a3a;
            margin: 30px 50px 10px 50px;
        }
        .all-product{
            max-width: 100%;
            height: fit-content;
            margin-left: 15px;
            margin-right: 15px;
            display: grid;
            grid-template-columns: auto auto auto auto ;
            flex-wrap: wrap;
            padding-left:75px;

        }
        
        .product-catlog{
            margin-top: 25px;
            width: 230px;
            height: 350px; 
        }
        .product-catlog img{
            width: 228px;
            height:235px ;
        }
        .product-catlog span{
            display: flex;
        }
    </style>

<body>
    <?php
    include 'navbar.php';

    $category_name = $_GET["category_name"];
    $sql = "SELECT * FROM `category`";
    $result = $connt->query($sql);
    ?>
    <h5 class="cpath">Home > Category > <?php echo $category_name; ?></h5>
    <div class="all-product">
        <?php
        $category_name = $_GET["category_name"];
        $sql = "SELECT * FROM `product` WHERE `product_cat_name`='$category_name' AND `status`=1";
        $result = $connt->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $formatedprice = number_format($row["price"]);
                    $formatedmrp = number_format($row["mrp"]);
                echo '<a href="product.php?category_name='.$category_name.'&product_id='.$row["product_id"].'" style="text-decoration: none !important;
                color: #3a3a3a;"> <div class="product-catlog">
                <img src="./admin/product_image/'.$row["img"].'" alt="">
                <div style="margin-left: 15px;margin-top:15px; position:relative;">
                 <h6>'.substr($row["name"],0,45).'...</h6>
                 <span><h3>₹</h3><h5 style="margin-top: 5px; margin-left:6px;">'.$formatedprice.'</h5><del style="margin-top: 6px; margin-left:11px; color:orange;">'.$formatedmrp.'</del></span>
                </div>
            </div></a>';
            }
        }
        else{
            echo '<div style="width:100%;margin-top:20%; margin-left:50%; margin-bottom:20%;">
            <h3 style="margin-left:25%">Coming Soon</h3>
            <h5>Currently this categories product are not available in our Store</h5>
        </div>';
        }
       ?>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>