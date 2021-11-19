<html>
    <head>
        <title>Golden Book</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
    </head>

<body>

<header>
    <div id="header-bar">
        <div id="logo">
            <a href="index.php">
                <img src="img/book.png" alt="">
                <h1>Golden Book</h1>
            </a>
        </div>
        <div id="links">
            <?php
            if(!empty($_SESSION))
            {
                echo "<a href='profil.php'>Profil</a>";
                echo "<a href='logout.php'>Se déconnecter</a>";
            }
            else
            {
                echo "<a href='inscription.php'>S'inscrire</a>";
                echo "<a  href='connexion.php'>Se connecter</a>";
            }
            ?>
        </div>
    </div>
</header>
