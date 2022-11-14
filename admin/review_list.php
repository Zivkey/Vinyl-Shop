<!DOCTYPE html>
<html lang="en">

<head>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/mein.css" />
    <link rel="stylesheet" href="../css/card.css" />
    <link rel="stylesheet" href="../css/topmein.css">
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/sidemeni.css" />
    <script src="../Scripts/card.js"></script>
    <link rel="stylesheet" href="../css/table.css" />
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>Document</title>
</head>

<body>
<ul class="navigation">

<li><a href="add_vinyl.php">Add vinyl</a></li>
<li><a href="user_list.php">User list</a></li>
<li><a href="message_list.php">Message list</a></li>
<li><a href="vinyl_list.php">Vinyl List</a></li>
<li><a href="review_list.php">Review list</a></li>
<li><a href="logout_admin.php">Logout</a></li>
</ul>


<nav role="navigation">
<div id="sidemeniToggle">

    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="sidemeni">
        <li><a href="add_vinyl.php">Add vinyl</a></li>
        <li><a href="user_list.php">User list</a></li>
        <li><a href="message_list.php">Message list</a></li>
        <li><a href="vinyl_list.php">Vinyl List</a></li>
        <li><a href="review_list.php">Review list</a></li>
        <li><a href="logout_admin.php">Logout</a></li>
    </ul>
</div>
</nav>
        <div class="container">
        <h1 align='center'>List of Vinyl</h1>

            <div class="review_list_table">
                <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM zalba";
                $exc = $con->query($sql);
                $nbrow = 0;
                echo "<table border=1 align='center' class='table'><thead class='.thead-dark'><th>ID</th><th>Ime korisnika</th><th>Zalba</th><th></th></thead>";
                while ($row = $exc->fetch()) {
                    echo "<tbody><tr><td>" . $row["id"] . "</td><td>" . $row["user_zalba"] . "</td><td>" .  $row["zalba_text"] . "</td><td>" . "<a class='delite' href='delete_zalba.php?id=" . $row["id"] . "'> Delete </a>" . "</td></tr>";

                    $nbrow++;
                }
                echo "<tr><td colspan=4>Ukupno ima: " . $nbrow . " Review lists </td></tr></tbody></table>";
                ?>
            </div>
        </div>
    </main>
    <footer class="footer-distributed">

<div class="footer-right">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-google"></i></a>
    <a href="#"><i class="fa fa-youtube"></i></a>

</div>

<div class="footer-left">

    <p class="footer-links">
        
    <p class="footer-links">
        <a class="link-1" href="add_vinyl.php">Vinyls </a>
        <a class="link-1" href="user_list.php">Users </a>
        <a class="link-1" href="message_list.php">Messages </a>
        <a class="link-1" href="vinyl_list.php">Vinys </a>
        <a class="link-1" href="review_list.php">Review lists </a>
        <a class="link-1" href="logout_admin.php">Logout </a>
    </p>

    <p>Marko Zivanovic &copy; 2022</p>
</div>

</footer>

</body>

</html>