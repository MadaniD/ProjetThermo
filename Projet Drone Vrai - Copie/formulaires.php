<?php
include("fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<form name="inscription" method="post" action="formulaires.php">
    <div>
        <div class="container-fluid">
            <h1>Formulaire</h1>
            <hr>
        </div>
        <div class="row">
            <div class="col-12 col-md-6" id="message-1">
                <h2 class="h4"><i class="fa fa-envelope"></i> Entrez les données demandées : <small><small class="required-input">&nbsp;(*requis)</small></small></h2>
                <div class="form-group mb-3"><label class="form-label" >Email</label><span class="required-input">*</span>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-1" name="Email" required="" placeholder="Entrer votre email"></div>
                </div>
                <div class="form-group mb-3"><label class="form-label" >Domicile</label><span class="required-input">*</span>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="text" id="from-email-1" name="Lieu" required="" placeholder="Entrer votre domicile"></div>
                </div>

                <div class="form-group mb-3"><label class="form-label" for="from-comments">Commentaire</label><textarea class="form-control" id="from-comments-1" name="infocommande" placeholder="Entrez des info pour la commande si necessaire " rows="5"></textarea></div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col"><button class="btn btn-primary d-block w-100" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                        <div class="col"><button class="btn btn-primary d-block w-100" type="submit" name="valider">  ok</button></div>

                    </div>
                </div>
                <hr class="d-flex d-md-none">
            </div>
            <div class="col-12 col-md-6">

                <div class="col-sm-6 col-md-12 col-lg-6">
                    <h2 class="h4"><i class="fa fa-user"></i> Nos Info</h2>
                    <div><span>HouseDrone@hotmail.fr</span></div>
                    <div><span>HouseDrone.fr</span></div>
                    <hr class="d-sm-none d-md-block d-lg-none">
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Notre Adresse</h2>
                    <div><span><strong>Jeanrostand</strong></span></div>
                    <div><span>55 Icannot Dr</span></div>
                    <div><span>Daytone Beach, FL 85150</span></div>
                    <div><abbr data-toggle="tooltip" data-placement="top" ></abbr> 01 65 48 56 14</div>
                    <hr class="d-sm-none">
                </div>
            </div>
        </div>
    </div>
</form>


<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/script.min.js"></script>


<?php
if (isset ($_POST['valider'])){
    //On récupère les valeurs entrées par l'utilisateur :
    $Email=$_POST['Email'];
    $infocommande=$_POST['infocommande'];
    $lieu=$_POST['Lieu'];

    //On se connecte
    $con = connectMaBase();
    $random=rand(10 , 500 );
    $etat="non";
    //On prépare la commande sql d'insertion
    $sql = 'INSERT INTO Commande (idCommande, infocommande, lieu, CompteClients_email,etat)  VALUES("'.$random.'","'.$infocommande.'","'.$lieu.'","'.$Email.'","'.$etat.'")';



    /*on lance la commande (mysql_query) et au cas où,
    on rédige un petit message d'erreur si la requête ne passe pas (or die)
    (Message qui intègrera les causes d'erreur sql)*/
    mysqli_query ($con,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($con));

    // on ferme la connexion
    mysqli_close($con);

    header('location:Acheter.html');
}

?>
</body>
</html>
</body>

</html>