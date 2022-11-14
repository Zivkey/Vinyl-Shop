<?php
session_start();
$id_ploce = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/footera.css" />
    <link rel="stylesheet" href="../css/body.css" />
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>Detail</title>
</head>

<body>
    <header>

    </header>
    <main>
        <?php
        require_once("../connect.php");
        $stmt = $con->prepare("SELECT * FROM ploca WHERE ploca.id = $id_ploce");
        $stmt->execute();
        echo "<center>";
        while ($data = $stmt->fetch()) {
            $artikal = "

            <div class='detail_wrapper'>
                <img src='../slike/" . $data["url"] . "' alt='' class='detail_img'>
                <br>
                <div class='detail_detalji'>
                    <ul class='detail_list'>
                        <br>
                        <li>
                           <h4> Vinyl name : " . $data["ime_ploce"] . " </h4>
                        </li>
                        <br>
                        <li>
                        <h4>  Musician name : " . $data["muzicar"] . "</h4>
                        </li>
                        <br>
                        <li>
                        <h4>  Productionhouse name : " . $data["produkcijska_kuca"] . "</h4>
                        </li>
                        <br>
                        <li>
                        <h4> Vinyl pprice : " . $data["cena"] . "</h4>
                        </li>
                        <br>
                        <li>
                        <h4>  Currently in storage : " . $data["stanje"] . "</h4>
                        </li>
                    </ul>
                </div>
            </div>
            
            ";
        }
        echo $artikal . "<br/><a href='user_product.php'>Nazad</a></center>";
        ?>
    </main>
    <footer>
        <div class="container">Branko Stojanović 5112 &copy;</div>
    </footer>
</body>

</html>