<?php
session_start();
?>
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
  <link rel="stylesheet" href="../css/card.css" />
  <link rel="stylesheet" href="../css/topmein.css">
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/sidemeni.css" />
  <link rel="stylesheet" href="../css/forma.css" />
  <script src="../Scripts/card.js"></script>
  <link rel="icon" type="image/x-icon" href="../favicon.png">
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
  <main>
    



      <h1 style="text-align:center;">Vinyls</h1>
      <div class="container-card">
        <div class='cards'>
          <?php
          require_once("../connect.php");
          $sql = "SELECT * FROM ploca";
          $exc = $con->query($sql);
          while ($row = $exc->fetch()) {
            echo "        
          
          <div class='card'>
              <div class='card__image-holder'>
                <img class='card__image' src='../slike/" . $row["url"] . "' alt='wave' />
              </div>
              <div class='card-title'>
                <a href='#' class='toggle-info btn'>
                  <span class='left'></span>
                  <span class='right'></span>
                </a>
                <h2>
                    " . $row["ime_ploce"] . "
                </h2>
              </div>
              <div class='card-flap flap1'>
                <div class='card-description'>
                Cena: " . $row["cena"] . " <br>
                Muzicar: " . $row["muzicar"] . " <br>
                Produkcijska Kuca: " . $row["produkcijska_kuca"] . " <br>
                </div>
                <div class='card-flap flap2'>
                  <div class='card-actions'>
                    <a href='#' class='btn'>Close</a>
                  </div>
                </div>
              </div>
              <br><br>
            </div>
               
                ";
          }
          ?>
        </div>
      </div>
    
  </main>

</body>
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

</html>