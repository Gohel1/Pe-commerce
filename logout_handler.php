<?php

session_start();
session_unset();
session_destroy();
unset($_SESSION['cart']);
header("Location:index.php");
exit();
?>