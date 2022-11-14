<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/mein.css" />
  <link rel="stylesheet" href="../css/topmein.css">
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/sidemeni.css" />
  <link rel="stylesheet" href="../css/table.css" />
  <link rel="stylesheet" href="../css/forma.css" />
  <script src="../Scripts/card.js"></script>
  <title>Document</title>
</head>

<body>
  <ul class="navigation">
    <li><a href="#"><?php echo $_SESSION['name'] ?></a></li>
    <li><a href="user_product.php">Vinyls</a></li>
    <li><a href="user_poruka.php">Message</a></li>
    <li><a href="lista_zelja&zalba.php">List</a></li>
    <li><a href="logout_user.php">Log out</a></li>
  </ul>


  <nav role="navigation">
    <div id="sidemeniToggle">

      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
      <ul id="sidemeni">
        <li><a href="user_product.php">Vinyls</a></li>
        <li><a href="user_poruka.php">Message</a></li>
        <li><a href="lista_zelja&zalba.php">List</a></li>
        <li><a href="logout_user.php">Log out</a></li>
      </ul>
    </div>
  </nav>

  <div class="lista_zelja_tbl">
    <?php
    require_once("../connect.php");
    $sql = "SELECT ime_ploce, muzicar, id FROM lista_zelja";
    $exc = $con->query($sql);
    $nbrow = 0;
    echo "<table border=1 align='center' class='table'><thead><th>Vinyl Name</th><th>Musician name</th><th></th></thead>";
    while ($row = $exc->fetch()) {
      echo "<tbody><tr><td>" . $row["ime_ploce"] . "</td><td>" . $row["muzicar"] . "</td><td>" . "<a class='delite' href='lista_zelja_delete.php?id=" . $row["id"] . "'> Delete </a>" . "</td></tr>";

      $nbrow++;
    }
    echo "<tr><td colspan=3>You have: " . $nbrow . " Whishlist </td></tr></tbody></table>";
    ?>
  </div>

  <div class="meinblock">
    <div class="container">
      <div class="sporedni">
        <form id="contact" action="lista_zelja_action.php" method="post">
          <h2 align='center'>Whishlist a Vinyl</h2>
          <br>
          <fieldset>
            <input type="text" name="ime_ploce" id="ime_ploce" placeholder="Insert Vinyl name"><br>
          </fieldset>
          <fieldset>
            <input type="text" name="muzicar" id="muzicar" placeholder="Inest musician name"><br>
          </fieldset>
          <fieldset>
            <button type="submit">Enter</button>
          </fieldset>
        </form>
      </div>
      <div class="container">
        <div class="sporedni">
          <form id="contact" action="zalba_action.php" method="post">
            <h2 align='center'>Enter a Review</h2><br>
            <fieldset>
              <textarea name="zalba_text" id="zalba_text" style="height: 74px; width: 329px;" placeholder="Enter a Review..."></textarea><br>
            </fieldset>
            <fieldset>
              <button type="submit">Enter</button>
            </fieldset>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer-distributed">
    <div class="footer-right">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-google"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>

    </div>

    <div class="footer-left">

      <p class="footer-links">

        <a class="link-1" href="user_product.php">Vinyls</a>
        <a class="link-1" href="user_poruka.php">Message</a>
        <a class="link-1" href="lista_zelja&zalba.php">List</a>
        <a class="link-1" href="logout_user.php">Log out</a>
      </p>

      <p>Marko Zivanovic &copy; 2022</p>
    </div>

  </footer>
</body>

</html>