<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/admin_product.css" />
    <link rel="stylesheet" href="../css/footera.css" />
    <link rel="stylesheet" href="../css/body.css" />
    <link rel="stylesheet" href="../css/vertical_menu_style.css" />
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href="logout_admin.php">Log out</a>
                <a href="add_vinyl.php">Add a vinyl</a>
                <a href="user_list.php">List of users</a>
                <a href="message_list">List of messages</a>
                <a href="vinyl_list.php">List of Vinyls</a>
                <a href="review_list.php">List of reviews</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="vertical_menu">
            <a href="logout_admin.php">Log out</a>
            <a href="add_vinyl.php">Add a vinyl</a>
            <a href="user_list.php">List of users</a>
            <a href="message_list">List of messages</a>
            <a href="vinyl_list.php">List of Vinyls</a>
            <a href="review_list.php">List of reviews</a>
        </div>
        <div class="container">
            <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
        </div>
    </main>

    <footer>
        <div class="container">Branko Stojanovic 5112</div>
    </footer>
</body>

</html>