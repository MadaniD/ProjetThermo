
<?php
session_start();
include("fonctions.php");

$con = connectMaBase();
if(isset($_SESSION['Email'])) {
    $sql = 'SELECT * FROM CompteClients,Commande WHERE email ="'.$_SESSION['Email'].'"';

    $req = mysqli_query ($con,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($con));
    $userinfo = $req->fetch_assoc();

    }
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>TUTO PHP</title>
        <meta charset="utf-8">
        <style>
            body {
                background-image:url('assets/img/header2.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                display: flex;
                flex-direction: column;
                align-items: center;
        </style>
    </head>
    <body>
    <div >

            <h1>Profil de <?php echo $userinfo['lastname']; ?></h1>
            <div class="container py-5 h-100" >
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img class="img-fluid" src="assets/img/profil.png" width="150">
                                </div>
                                <h4 class="mb-2"><?php echo $userinfo['lastname']; ?> <?php echo $userinfo['name']; ?></h4>
                                <p class="text-muted mb-4"> Email= <?php echo $userinfo['email']; ?><span class="mx-2">|</span> Intervention= <?php echo $userinfo['etat']; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br />
            <a href="Deconnexion.php">Se déconnecter</a>
        </section>
    </div>
    </body>
    </html>