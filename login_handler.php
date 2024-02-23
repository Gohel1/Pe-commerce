<?php
include 'admin/dbconnect.php';

$login = "false";
$showerror = "false";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $result = $connt->query($sql);
    if ($result->num_rows == 1) {
        $login = "true";
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row["username"];
        $_SESSION["email"] = $email;
        header("Location:index.php?loginsuccess=$login");
        exit();
        
    } else {
        $showerror = "true";
        header("Location:index.php?loginfailed=$login");
        exit();

    }
}
?>