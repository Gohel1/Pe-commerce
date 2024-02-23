<?php
include 'admin/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["add-to-cart"])) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            $img = $_POST["img"];
            $name = $_POST["name"];
            $mrp = $_POST["mrp"];
            $price = $_POST["price"];
            $qty = $_POST["qty"];
            $name = str_replace("'", "\'", $name);

            $cartExist = "SELECT * FROM `user-cart` WHERE `name` = '$name'";
            $result = $connt->query($cartExist);
            if ($result->num_rows > 0) {
                echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Product Alreay Added!</strong> Check your cart.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            } else {
                $sql = "INSERT INTO `user-cart` (`img`,`name`,`mrp`,`price`,`qty`) VALUES ('$img','$name','$mrp','$price','$qty')";
                $result = $connt->query($sql);

                if ($result == TRUE) {
                    // Item added to cart successfully
                } else {
                    echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Something went wrong!</strong> try again.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                }
            }
        } else {
            echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Access Denied!</strong> You need to login first.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        }
    }
}
?>