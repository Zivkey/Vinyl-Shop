<?php
    require_once("connect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);

    $stmt = $con->prepare("SELECT * FROM user WHERE username=:username AND password=:password");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row){
        session_start();
        $_SESSION["name"] = $row["name"];
        $_SESSION["username"] = $row["username"];
        header("Location: product.php");
    }
    else{
        echo "<script>
            window.location.href='index.php'
            alert('Username or password not correct!');
            </script>";
    }