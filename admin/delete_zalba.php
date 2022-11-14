<?php
    require_once("../connect.php");
    $sql = $con->exec("DELETE FROM zalba WHERE id = $_REQUEST[id]");
    header("Location: review_list.php");
