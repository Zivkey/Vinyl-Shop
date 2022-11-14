<?php
    require_once("../connect.php");
    $sql = $con->exec("DELETE FROM ploca WHERE id = $_REQUEST[id]");
    header("Location: vinyl_list.php");