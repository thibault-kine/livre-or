<?php
session_start();

include("header.php");
?>

    <div id="welcome">
        <div id="title">
            <h1>Golden Book</h1>
            <h2>Mon livre d'Or</h2>
        </div>
        <?php
        if(!isset($_SESSION) || empty($_SESSION))
        {
            echo("
                <h2>Vous n'avez pas de compte ?</h2>
                <a href='inscription.php'>
                <h1>Commencez par vous inscrire !</h1>
                </a>
            ");
        }
        else
        {
            echo("
                <a href='commentaire.php'><h1 style='text-align: center; margin-top: 50px;'>Dites quelque chose de gentil, ".$_SESSION["login"]." !</h1></a>
            ");
        }
        ?>
    </div>
<?php
include("footer.php")
?>