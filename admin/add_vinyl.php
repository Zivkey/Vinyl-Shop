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
   
        <div class="add_vinyl_form">
            <div class="container">
                <form  id="contact" action="add_vinyl_action.php" method="post" enctype="multipart/form-data">
                <h1 align='center'>List of Messages</h1>
                    <br>
                    <fieldset>
                        <input type="file" name="img_vinyl" id="img_vinyl">
                    </fieldset>
                    <fieldset>
                        <input type="text" name="ime_ploce" id="ime_ploce" placeholder="Enter Vinyl name" minlength="3" required>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="muzicar" id="muzicar" placeholder="Enter Musician" minlength="3"  required>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="produkcijska_kuca" id="produkcijska_kuca" placeholder="Enter production house" minlength="5"  required>
                    </fieldset>
                    <fieldset>
                        <input type="number" name="cena" id="cena" min="1000"max="10000"  placeholder="Enter the price of vinyl"  required></input>
                    </fieldset>
                    <fieldset>
                        <input type="number" name="stanje" id="stanje" min="1"max="1000" placeholder="Enter the amount of vinyl"  required></input>
                    </fieldset>
                    <fieldset>
                        <button value="Insert vinyl" name="insert_vinyl_btn" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
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
                <a class="link-1" href="add_vinyl.php">Vinyls </a>
                <a class="link-1" href="user_list.php">Users </a>
                <a class="link-1" href="message_list.php">Messages </a>
                <a class="link-1" href="vinyl_list.php">Vinys </a>
                <a class="link-1" href="review_list.php">Reviews </a>
                <a class="link-1" href="logout_admin.php">Logout </a>
            </p>

            <p>Marko Zivanovic &copy; 2022</p>
        </div>

    </footer>

</body>

</html>