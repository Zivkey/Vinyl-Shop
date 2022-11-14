<?php
require_once("../connect.php");
session_start();
$username_usera_lz = $_SESSION["username"];
$vinyl_name = $_POST["ime_ploce"];
$pisac_lz = $_POST["muzicar"];


$sql = $con->prepare("INSERT INTO lista_zelja(user_name, ime_ploce, muzicar) VALUES (:user_name, :ime_ploce, :muzicar)");

$sql->bindParam(":user_name", $username_usera_lz);
$sql->bindParam(":ime_ploce", $vinyl_name);
$sql->bindParam(":muzicar", $pisac_lz);

$date = $sql->execute();

if ($date) {
    echo "Uspešno ste uneli knjigu u listu";
    header("Location: lista_zelja&zalba.php");
} else {
    echo "Greška pri slanju poruke";
}
?>