<?php
    require_once("../connect.php");
    $sql = $con->exec("DELETE FROM poruka WHERE id = $_REQUEST[id]");
    header("Location: message_list");