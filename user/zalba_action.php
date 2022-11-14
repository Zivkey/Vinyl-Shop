<?php
require_once("../connect.php");
session_start();
$username_usera_zalba = $_SESSION["username"];
$zalba_txt = $_POST["zalba_text"];


$sql = $con->prepare("INSERT INTO zalba(user_zalba, zalba_text) VALUES (:user_zalba, :zalba_text)");

$sql->bindParam(":user_zalba", $username_usera_zalba);
$sql->bindParam(":zalba_text", $zalba_txt);


$date = $sql->execute();

if ($date) {
    echo "Uspešno ste uneli zalbu";
    header("Location: lista_zelja&zalba.php");
} else {
    echo "Greška pri slanju poruke";
}
?>