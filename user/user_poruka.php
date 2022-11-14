<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/mein.css" />
  <link rel="stylesheet" href="../css/forma.css" />
  <link rel="stylesheet" href="../css/topmein.css">
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/sidemeni.css" />
  <link rel="stylesheet" href="../css/mapa_style.css" />
  <script src="script.js"></script>
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
 


  <div class="add_vinyl_form">
    <div class="container">
      <form id="contact" action="user_poruka_action.php" method="post" onsubmit="return poruka_validacija()">
        <h1 align='center'>Send Message</h1>
        <br>
        <fieldset>
          <input type="text" name="ime" id="ime" placeholder="Name"><br>
        </fieldset>
        <fieldset>
          <input type="text" name="prezime" id="prezime" placeholder="Surname"><br>
        </fieldset>
        <fieldset>
          <input type="text" name="telefon" id="telefon" placeholder="Phone number"><br>
        </fieldset>
        <fieldset>
          <textarea name="tekst_poruke" id="tekst_poruke" style="height: 74px; width: 329px;" placeholder="Enter masssage"></textarea><br>
        </fieldset>
        <fieldset>
          <button type="submit" id="btn_por">Send massage</button>
        </fieldset>
         <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d519.8185986571171!2d21.894156039764706!3d43.3113668483872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0af482f432d%3A0xe01d66af3d7fa295!2zU3Rhbm9qYSBCdW51xaFldmNhIDUsIE5pxaE!5e0!3m2!1sen!2srs!4v1655848417505!5m2!1sen!2srs" width="350" height="350" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
      </form>
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