
<?php
session_start();
include("fonctions.php");

$con = connectMaBase();
if(isset($_SESSION['Email'])) {
    $sql = 'SELECT * FROM CompteClients WHERE email ="'.$_SESSION['Email'].'"';

    $req = mysqli_query ($con,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($con));
    $userinfo = $req->fetch_assoc();

    }
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>TUTO PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
    <div >
        <h2>Profil de <?php echo $userinfo['lastname']; ?></h2>
        <br /><br />
        Pseudo = <?php echo $userinfo['name']; ?>
        <br />
        Mail = <?php echo $userinfo['email']; ?>
        <br />
            <br />
            <a href="Deconnexion.php">Se déconnecter</a>

    </div>
    </body>
    </html>