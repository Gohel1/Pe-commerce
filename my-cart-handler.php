<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add-to-cart"])) {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            if (isset($_SESSION['cart'])) {
                $myitems = array_column($_SESSION['cart'], 'name');
                if (in_array($_POST['name'], $myitems)) {
                    echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Product Already Added!</strong> in your cart.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
                } else {
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array(
                        'product_id' => $_POST['product_id'],
                        'product_cat_name' => $_POST['product_cat_name'],
                        'name' => $_POST['name'],
                        'img' => $_POST['img'],
                        'mrp' => $_POST['mrp'],
                        'price' => $_POST['price'],
                        'qty' => $_POST['qty']
                        
                    );
                   echo "<script>
                   window.location.href='my-cart.php';
                   </script>";

                }
            } else {
                $_SESSION['cart']['0'] = array(
                    'product_id' => $_POST['product_id'],
                        'product_cat_name' => $_POST['product_cat_name'],
                    'name' => $_POST['name'],
                    'img' => $_POST['img'],
                    'mrp' => $_POST['mrp'],
                    'price' => $_POST['price'],
                    'qty' => $_POST['qty']
                    
                );
                echo '<div  class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Product Add!</strong> in your cart.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
          
            }
        }
        else{
            echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>You are not Logged in !</strong> Login first.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }
    if (isset($_POST["remove-cart"])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["name"] == $_POST["name"]) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
            window.location.href='my-cart.php';
            </script>";
            }
        }
    }
    if(isset($_POST["qtyupdate"])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["name"] == $_POST["name"]){
            $_SESSION['cart'][$key]['qty'] = $_POST["qtyupdate"];
            echo "<script>
            window.location.href='my-cart.php';
            </script>";
            }
        }
    }
}