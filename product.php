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
        .pt {
            width: 100%;
            display: flex;

        }

        .product-image {
            width: 442px;
            height: 482px;
            /* border: 1px solid black; */
            margin: 45px 36px 45px 50px;
        }

        .product-image img {
            width: 440px;
            height: 480px;
        }

        .product-information {
            /* border: 1px solid black; */
            width: 800px;
            height: fit-content;
            padding: 10px 45px;
        }

        .p-links a {
            color: #3a3a3a;
            font-size: 15px;
            font-weight: 600;
        }

        .p-links a:hover {
            color: #ff8e15;
        }

        .p-icons {
            margin-top: 25px;
            padding-top: 15px;
            padding-bottom: 15px;
            /* border-top: 1px solid gray;
            border-bottom: 1px solid gray; */
            display: flex;
            gap: 70px;
        }

        .p-icons span {
            font-size: 28px;
            background-color: #e5e5e5;
            padding: 7px;
            border-radius: 50%;
        }

        .p-icons h6 {
            margin-top: 8px;
        }

        .qnt {
            margin-top: 30px;
        }

        .b-btn {
            margin-top: 25px;
        }

        .b-btn button {
            background-color: #ff8e15;
            font-size: 19px;
            font-weight: 600;
            color: white;
            outline: none;
            border: none;
            padding: 8px 45px 10px 45px;
            border-radius: 4px;
        }

        .b-btn a:hover {
            color: white;
            background-color: #f98518;
        }

        .related {
            margin: 0 100px;
        }

        .all-product {
            max-width: 100%;
            height: fit-content;
            margin-left: 15px;
            margin-right: 15px;
            display: grid;
            grid-template-columns: auto auto auto auto;
            flex-wrap: wrap;
            padding-left: 75px;

        }

        .product-catlog {
            margin-top: 15px;
            width: 230px;
            height: 350px;
        }

        .product-catlog img {
            width: 228px;
            height: 235px;
        }

        .product-catlog span {
            display: flex;
        }
    </style>

<body>
    <?php
    include 'navbar.php';
    include 'my-cart-handler.php';
    ?>
    <?php

    $product_id = $_GET["product_id"];
    $sql = "SELECT * FROM `product` WHERE `product_id`='$product_id'";
    $result = $connt->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $img = $row["img"];
            $formatedprice = number_format($row["price"]);
                    $formatedmrp = number_format($row["mrp"]);
    ?>
            <form action="" method="post">
                <div class="pt">
                    <div class="product-image">
                        <img src="./admin/product_image/<?php echo $img; ?>" alt="">
                    </div>
                    <div class="product-information">
                        <span class="p-links">
                            <a href="index.php" style="text-decoration: none;">Home</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="category.php?category_name=<?php echo $row["product_cat_name"]; ?>" style="text-decoration: none;"><?php echo $row["product_cat_name"]; ?></a>&nbsp;&nbsp;>&nbsp;&nbsp;<a><?php echo substr($row["name"], 0, 25); ?>....</a>
                        </span>
                        <div style="margin-top: 15px;">
                            <p style="font-size: 23px;"><?php echo $row["name"]; ?></p>
                            <p style="font-size:17px; font-weight:600; color:#20bc4f;">Special Price</p>
                            <span style="display: flex; margin-top:-12px;">
                                <h2 style="color: #3a3a3a;">₹ <?php echo $formatedprice; ?></h2>
                                <h6 style="font-size: 17px; font-family:sans-serif; font-weight:500; color:gray; margin-top:13px; margin-left:18px; ">M.R.P</h6><del style="font-size: 17px; font-family:sans-serif; font-weight:500; color:gray; margin-top:10px; margin-left:8px; "> ₹ <?php echo $formatedmrp; ?></del>
                            </span>
                            <p>Inclusive of all Taxes</p>
                        </div>
                        <!-- <div class="p-icons">
                        <div>
                            <span class="material-symbols-outlined" style="margin-left: 52px;">rotate_left</span>
                            <h6>7 days Replacement</h6>
                        </div>
                        <div>
                            <span class="material-symbols-outlined" style="margin-left: 25px;">local_shipping</span>
                            <h6>Free Delivery</h6>
                        </div>
                        <div>
                            <span class="material-symbols-outlined" style="margin-left: 30px;">verified_user</span>
                            <h6>Warranty Policy</h6>
                        </div>
                        <div>
                            <span class="material-symbols-outlined" style="margin-left: 15px;">emoji_events</span>
                            <h6>Top Brand</h6>
                        </div>
                    </div> -->
                        <div class="qnt">
                            <p style="font-size: 18px;">Quantity :
                            <input type="number" min="1" max="10" name="qty" style="width:50px; text-align:center; outline:none; margin-left:5px; ">
                            </p>
                        </div>
                        <input type="hidden" name="product_cat_name" value="<?php echo $row["product_cat_name"]; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $row["product_id"]; ?>">
                        <input type="hidden" name="name" value="<?php echo $row["name"]; ?>">
                        <input type="hidden" name="mrp" value="<?php echo $row["mrp"]; ?>">
                        <input type="hidden" name="price" value="<?php echo $row["price"]; ?>">
                        <input type="hidden" name="img" value="<?php echo $row["img"]; ?>">


                        <div class="b-btn">
                            <button href="">Buy Now</button>
                            <button name="add-to-cart" >Add To Cart</button>
                        </div>
                        <div class="desc">
                            <p style="font-size: 23px; margin-top:40px;">Product Description</p>

                            <p style="text-align: justify;"><?php echo str_replace('.', '.<br>', $row["description"]); ?></p>
                        </div>
                    </div>
                </div>

            </form>


    <?php
        }
    }
    ?>
    <div class="related">
        <p style="font-size: 26px; font-weight:500;">Popular products based on this item</p>

    </div>
    <div class="all-product">
        <?php
        $category_name = $_GET["category_name"];
        $sql = "SELECT * FROM `product` WHERE `product_cat_name`='$category_name' AND `status`=1 AND `product_id` <> '$product_id'";
        $result = $connt->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $formatedprice = number_format($row["price"]);
                    $formatedmrp = number_format($row["mrp"]);
                echo '<a href="product.php?category_name=' . $category_name . '&product_id=' . $row["product_id"] . '" style="text-decoration: none !important;
                color: #3a3a3a;"> <div class="product-catlog">
                <img src="./admin/product_image/' . $row["img"] . '" alt="">
                <div style="margin-left: 15px;margin-top:15px; position:relative;">
                 <h6>' . substr($row["name"], 0, 45) . '...</h6>
                 <span><h3>₹</h3><h5 style="margin-top: 5px; margin-left:6px;">' . $formatedprice . '</h5><del style="margin-top: 6px; margin-left:11px; color:orange;">' . $formatedmrp . '</del></span>
                </div>
            </div></a>';
            }
        } else {
            echo "done";
        }
        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-4.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        

</body>

</html>