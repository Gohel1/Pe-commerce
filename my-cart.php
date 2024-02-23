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

        .grandtotal {
            float: right;

        }

        .deleteline {
            height: 30px;
            width: 30px;
            margin-left: 20px;
            border-left: 1px solid gray;
        }

        #delicon {
            font-size: 30px;
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
        <?php
        

        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
            echo '<div class="product-cart">
            <img src="emptycart.png" alt="" style="width: 350px; height:300px;">
            <div style="margin:60px 70px;">
                <p style="font-size: 29px; margin:0px;">You need to login first.</p> 
                <p style="color: #ff8e15; font-size:19px; font-weight:500;">Shop today\'s deal</p>
                <a href="index.php" class="btn" style="background-color:#ff8e15; outline:none; border:none; color:white; font-weight:500;">Login</a>
            </div>
         </div>
            <div class="lineinfinity">
            </div>';
        } else {
            if (isset($_SESSION['cart'])  && !empty($_SESSION['cart'])) {

                foreach ($_SESSION['cart'] as $key => $value) {
                    echo '<div class="product-cart">
                                    <img src="./admin/product_image/' . $value['img'] . '" alt="">
                                    <div class="product-info">
                                        <a style="font-weight: 400; font-size:21px; text-decoration:none; color:black;"  href="product.php?category_name='.$value['product_cat_name'].'&product_id='.$value['product_id'].'">' . substr($value['name'], 0, 40) . '....</a>
                                        <p style="font-size: 16px; font-weight:500; color:#20bc4f; ">In stock</p>
                                        <p style="margin:0;">Price  ₹' . $value['price'] . '<input type="hidden" class="iprice" value="' . $value['price'] . '"></p>
                                        <p style="font-size: 16px;">Eligible for FREE Shiping</p>
                                        
                                        <div style="display: flex;">
                                        <form action="my-cart-handler.php" method="post" style="margin:0; width:125px;">
                                        Quantity : <input type="number" name="qtyupdate" min="1" max="10" value="'.$value['qty'].'" class="iquantity" onchange="this.form.submit()" style="width:50px; text-align:center; outline:none;  ">
                                        <input type="hidden" name="name" value="' . $value["name"] . '">

                                        </form>
                                        <div class="deleteline" >
                                        <form action="" method="post">
                                        <button name="remove-cart" style="border:none; background:none; margin-left:-10px;">
                                         <span class="material-symbols-outlined" id="delicon" >delete</span>
                                         </button>
                                         <input type="hidden" name="name" value="' . $value["name"] . '">

                                         </form>
                                         </div>
                                        
                                    </div>        
                                    </div>
                                    <div class="product-price">
                                        <h5 class="itotal"></h5>
                                    </div>
                                </div>
                                <div class="lineinfinity">
                                </div>';
                }
            } else {

                echo '<div class="product-cart">
                    <img src="emptycart.png" alt="" style="width: 350px; height:300px;">
                    <div style="margin:60px 70px;">
                        <p style="font-size: 29px; margin:0px;">Shopping Cart is Empty</p> 
                        <p style="color: #ff8e15; font-size:19px; font-weight:500;">Shop today\'s deal</p>
                        <a href="index.php" class="btn" style="background-color:#ff8e15; outline:none; border:none; color:white; font-weight:500;">Continue Shopping</a>
                    </div>
                 </div>
                    <div class="lineinfinity">
                    </div>';
            }
        }
        if (isset($_SESSION['cart'])) {
            echo '<div class="grandtotal">
            <p style="font-size: 20px; font-weight:400;">Subtotal (' . count($_SESSION['cart']) . ' Items): <strong id="gtotal"></strong></p>

        </div>';
        }


        ?>
    </div>
    <script>
        var gt =0;
        var iquantity = document.getElementsByClassName('iquantity');
        var iprice = document.getElementsByClassName('iprice');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');


        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                var formattedTotal = new Intl.NumberFormat('en-IN', {
                    style: 'currency',
                    currency: 'INR'
                }).format(itotal[i].innerText);
                itotal[i].innerText = formattedTotal;
                console.log(itotal[i].innerText);

                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
            var formatGtotal = new Intl.NumberFormat('en-IN', {
                    style: 'currency',
                    currency: 'INR'
                }).format(gtotal.innerText);
                gtotal.innerText = formatGtotal;
                console.log(gtotal.innerText);
        }
        subTotal();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-4.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>