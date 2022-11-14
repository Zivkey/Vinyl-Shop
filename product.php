<?php
require_once("connect.php");
session_start();
$username = $_SESSION['username'];
$name = $_SESSION['name'];
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$stmt = $con->prepare("SELECT * FROM user WHERE username = :username");
$stmt->bindParam(":username", $username);
$stmt->execute();   

$user = $stmt->fetch();
$isAdmin = (intval($user["admin"]) == 1 ? true : false);

if ($isAdmin) {
    //header("Location: admin/admin_product.php");
    header("Location: admin/add_vinyl.php");
}else{
    header("Location: user/user_product.php");
}
?>
