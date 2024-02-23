<?php

include 'admin/dbconnect.php';


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
        .cartlist {
            width: 70%;
            height: fit-content;
            margin: 35px 50px;
            padding: 20px 35px 45px 35px;
            background-color: white;
            border: 0.3px solid #d6d6d6;
            /* box-shadow: 2px 4px 8px 0 rgba(0,0,0,0.2); */

        }

        .line {
            margin-top: 30px;
            border-bottom: 1px solid #d6d6d6;
        }

        .product-cart {
            width: 100%;
            display: flex;
        }

        .product-cart img {
            width: 200px;
            height: 200px;
        }

        .product-info {
            width: 62%;
            padding: 10px 25px;
        }

        .product-price {
            width: 15%;
            padding: 13px 0;
        }

        .product-price h5 {
            float: right;
        }

        .lineinfinity {
            border-bottom: 1px solid #d6d6d6;
            margin-bottom: 15px;
        }

        .subtotal {
            float: right;

        }

        #delicon {
            font-size: 30px;
            margin-left: 15px;
        }
    </style>

<body>
    <?php

    include 'navbar.php';
    include 'my-cart-handler.php';

    ?>
    <div class="cartlist">

        <h4 style="font-size: 28px; font-weight:450;">Shooping Cart</h4>
        <h6 style="font-size: 15px; font-weight:500; float:right;">Price</h6>
        <div class="line">

        </div>
        <div class="product-cart">
            <img src="./admin/product_image/' . $img . '" alt="">
            <div class="product-info">
                <a style="font-weight: 400; font-size:21px;">' . substr($name, 0, 40) . '....</a>
                <p style="font-size: 16px; font-weight:500; color:#20bc4f; ">In stock</p>
                <p style="margin:0;">M.R.P ₹' . $mrp . '</p>
                <p style="font-size: 16px;">Eligible for FREE Shiping</p>
                <div style="display: flex;">
                    Quantity : <input type="number" min="0" max="10" value="1" style="width:50px; text-align:center; outline:none; ">
                    <div class="partline" style="border-left: 0.5px solid gray; margin-left:20px;"></div>
                    <form action="" method="post">
                        <span class="material-symbols-outlined" id="delicon" name="remove-to-cart">delete</span>
                    </form>
                </div>
            </div>
            <div class="product-price">
                <h5>₹ ' . $price . '</h5>
            </div>
        </div>
        <div class="lineinfinity">
        </div>';


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-4.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>