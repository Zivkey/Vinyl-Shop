<?php
require_once("../connect.php");
$url = $_FILES['img_vinyl']['name'];
$ime_ploce = $_POST['ime_ploce'];
$muzicar = $_POST['muzicar'];
$produkcijska_kuca = $_POST['produkcijska_kuca'];
$cena = $_POST['cena'];
$stanje = $_POST['stanje'];


$img_ex = pathinfo($url, PATHINFO_EXTENSION);
$tmp_name = $_FILES['img_vinyl']['tmp_name'];
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
if (in_array($img_ex_lc, $allowed_exs)) {
    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
    $img_upload_path = '../slike/'.$new_img_name;
    move_uploaded_file($tmp_name, $img_upload_path);
}



$sql = $con->prepare("INSERT INTO ploca(url, ime_ploce, muzicar, produkcijska_kuca, cena, stanje) VALUES (:url, :ime_ploce, :muzicar, :produkcijska_kuca, :cena, :stanje)");
$sql->bindParam(":url", $new_img_name);
$sql->bindParam(":ime_ploce", $ime_ploce);
$sql->bindParam(":muzicar", $muzicar);
$sql->bindParam(":produkcijska_kuca", $produkcijska_kuca);
$sql->bindParam(":cena", $cena);
$sql->bindParam(":stanje", $stanje);
$date = $sql->execute();

if ($date) {
    echo "Uspešno ste se registrovali";
    header("Location: add_vinyl.php");
}
