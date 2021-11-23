<html>
    <head>
        <title>Golden Book</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <link href="livre-or.css" ref="stylesheet">
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
                echo "<a href='commentaire.php' style='background-color: yellow; color: grey;'>Poster un commentaire</a>";
                echo "<a href='livre-or.php'>Accéder au livre d'or</a>";
                echo "<a href='profil.php'>Profil</a>";
                echo "<a href='logout.php'>Se déconnecter</a>";
            }
            else
            {
                echo "<a href='livre-or.php'>Accéder au livre d'or</a>";
                echo "<a href='inscription.php'>S'inscrire</a>";
                echo "<a  href='connexion.php'>Se connecter</a>";
            }
            ?>
        </div>
    </div>
</header>
