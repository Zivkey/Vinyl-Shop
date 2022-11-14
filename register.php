<?php
    require_once("connect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $name = $_POST["name"];
    $mail = $_POST["mail"];

    $sql = $con->prepare("INSERT INTO user(username, password, name, mail) VALUES (:username, :password, :name, :mail)");

    $sql->bindParam(":username", $username);
    $sql->bindParam(":password", $password);
    $sql->bindParam(":name", $name);
    $sql->bindParam(":mail", $mail);
    
    $date = $sql->execute();

    if($date){
        echo "Uspešno ste se registrovali";
        header("Location: index.php");
    }
    else{
        echo "Greška pri registraciji";
    }