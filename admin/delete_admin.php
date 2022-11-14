<?php
    require_once("../connect.php");
    $sql = $con->exec("DELETE FROM user WHERE id = $_REQUEST[id]");
    header("Location: user_list.php");
