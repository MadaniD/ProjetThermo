<!DOCTYPE html>
<?php
session_start();
include("fonctions.php");
$dsn = 'mysql:host=localhost ;dbname=thermodrone' ;
$user ='root' ;
$password ='issam93@';

if(isset($_GET['Email']) AND $_GET['MDP'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $dsn->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    ?>
    <html>
    <head>
        <title>TUTO PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
    <div align="center">
        <h2>Profil de <?php echo $userinfo['Prenom']; ?></h2>
        <br /><br />
        Pseudo = <?php echo $userinfo['Nom']; ?>
        <br />
        Mail = <?php echo $userinfo['Email']; ?>
        <br />
        <?php
        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
            ?>
            <br />
            <a href="Deconnexion.php">Se déconnecter</a>
            <?php
        }
        ?>
    </div>
    </body>
    </html>
    <?php
}
?>