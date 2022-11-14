<?php
    require_once("../connect.php");
    $sql = $con->exec("DELETE FROM lista_zelja WHERE id = $_REQUEST[id]");
    header("Location: lista_zelja&zalba.php");