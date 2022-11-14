<?php
    require_once("../connect.php");
    session_start();
    $username = $_SESSION["username"];
    $ime_usera = $_POST["ime"];
    $prezime_usera = $_POST["prezime"];
    $broj_telefona = $_POST["telefon"];
    $poruka = $_POST["tekst_poruke"];

    $sql = $con->prepare("INSERT INTO poruka(user_name, ime, prezime, telefon, tekst_poruke) VALUES (:user_name, :ime, :prezime,:telefon, :tekst_poruke)");

    $sql->bindParam(":user_name", $username);
    $sql->bindParam(":ime", $ime_usera);
    $sql->bindParam(":prezime", $prezime_usera);
    $sql->bindParam(":telefon", $broj_telefona);
    $sql->bindParam(":tekst_poruke", $poruka);
    
    $date = $sql->execute();

    if($date){
        echo "Uspešno ste poslali poruku";
        header("Location: user_product.php");
    }
    else{
        echo "Greška pri slanju poruke";
    }
