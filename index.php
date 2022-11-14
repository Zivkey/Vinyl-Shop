<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: product.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/pocetna.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/forma.css" />
    <link rel="stylesheet" href="./css/mein.css" />
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>index</title>
</head>

<body>
    <div class="add_vinyl_form">
        <div class="container">
            <div class="login" id="login">

                <form action="login.php" id="contact" method="post" class="login_form">
                    <h1 align='center'>Log in</h1>
                    <br>
                    <fieldset>
                        <input type="text" name="username" placeholder="Enter username"><br>
                    </fieldset>
                    <fieldset>
                        <input type="password" name="password" placeholder="Enter password"><br>
                    </fieldset>
                    <fieldset>
                        <button value="Login" type="submit" id="contact-submit">Login</button>
                    </fieldset>
                    <fieldset>
                        <a href="registration.php">Registruj se</a>
                    </fieldset>
                </form>
            </div>
            <br>
            <video autoplay muted loop id="myVideo">
                <source src="video\production ID_4306403.mp4" type="video/mp4">
            </video>
            <div align='center' class="content">
                <br>
                <a class='playBut' onclick="Pauziraj()">
                    <svg version="1.1" x="0px" y="0px" width="213.7px" height="213.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">

                        <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
          73.5,62.5 148.5,105.8 73.5,149.1 " />

                        <circle class='circle' id="XMLID_17_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                    </svg>
                </a>
            </div>

        </div>
    </div>

    <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("dugme");

        function Pauziraj() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>

</html>