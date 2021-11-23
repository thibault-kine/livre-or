<?php
session_start();

if(!isset($_SESSION))
{
    header("Location: inscription.php");
}

if(!isset($_SESSION["id"]))
{
    $_login = $_SESSION["login"];
    $_mdp = $_SESSION["password"];

    $db = mysqli_connect("localhost", "root", "", "livreor");
    $query = "SELECT `id` FROM `utilisateurs` WHERE `login`='$_login' AND `password`='$_mdp'";
    $result = mysqli_query($db, $query, MYSQLI_ASSOC);
    $row = mysqli_fetch_assoc($result);

    $row["id"] = $_SESSION["id"];
}

include("header.php");
?>

<form method="post" id="form">
    <?php echo $_SESSION["login"]." dit :<br>"; ?>
    <textarea name="commentaire" id="" cols="60" rows="10" placeholder="Dites quelque chose de gentil"></textarea><br>
    <input type="submit" value="Je commente !" class="btn">
</form>

<?php
var_dump($_SESSION);

include("footer.php");

date_default_timezone_set("Europe/Paris");
$_date = date("d/m/Y H:i:s");
$_id = $_SESSION["id"];
$_commentaire = $_POST["commentaire"];

if(!empty($_POST["commentaire"]))
{
    $bdd = mysqli_connect("localhost", "root", "", "livreor");

    $query = "INSERT INTO `commentaires`(`commentaire`, `id_utilisateur`, `date`) VALUES ('$_commentaire', '$_id', '$_date');";

    $result = mysqli_query($bdd, $query);
    header("location: livre-or.php");
}
else
{
    exit();
}
?>