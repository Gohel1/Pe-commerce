<?php
include 'admin/dbconnect.php';

$regfailed = "false";
$regdone = "false";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $exitSql = "SELECT * FROM `user` WHERE `email` = '$email'";
    $result =$connt ->query($exitSql);
    if($result->num_rows>0){
        $regfailed = "true";
        header("Location:index.php?registerFailed=$regfailed");
        exit();
    }
    else{
        if(($password == $cpassword)){
            $sql = "INSERT INTO `user` (`username`,`email`,`password`,`cpassword`) VALUES ('$username','$email','$password','$cpassword')";
            $result = $connt->query($sql);
            if($result == TRUE){
                $regdone = "true";
                header("Location:index.php?registerDone=$regdone");
                exit();
            }
        }
        else{
            $passerror = "true";
            header("Location:index.php?PasswordNotMAtched=$passerror");
        }
    }
}
?>