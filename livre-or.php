<?php
session_start();

include("header.php");

$db = mysqli_connect("localhost", "root", "", "livreor");
$query = "SELECT * FROM `commentaires` ORDER BY `id` DESC";
$result = mysqli_query($db, $query);
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($fetch as $indice => $valeur)
{
    $userID = $valeur["id_utilisateur"];
    $queryUser = "SELECT `login` FROM `utilisateurs` WHERE `id`='$userID'";
    $result2 = mysqli_query($db, $queryUser);
    $fetch2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    echo("
    <style>
        .commentaire
        {
            border: 5px dotted goldenrod;
            background-color: rgb(255, 224, 46);
            width: 60%;
            margin: auto;
            padding: 30px;
            margin-top: 30px;
            margin-bottom: 30px;
            font-family: Arial;
        }

        .commentaire p
        {
            background-color: white;
            font-weight: normal;
            font-size: 18;
            padding: 5px;
        }

    </style>
    ");

    echo "<div class='commentaire'>";
    echo("
    <h2>Posté le ".$valeur["date"]." par ".$fetch2[0]["login"]." :<h2>
    <p>".$valeur["commentaire"]."</p>
    ");
    echo "</div>";
}

include("footer.php");
?>