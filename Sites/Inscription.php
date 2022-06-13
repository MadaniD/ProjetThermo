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
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<div class="text-center">
    <div class="container text-center">
        <form class="align-content-center" id="contactForm" action="Inscription.php" method="POST">
            <fieldset style="width: 542px;">
                <legend style="font-style: normal;font-weight: bold;font-size: 28px;">Formulaire d'inscription</legend>
            </fieldset>
            <div class="row text-start" style="padding: 0px;">
                <div class="col-md-6" id="message-1" style="width: 349px;height: 331px;min-width: 0px;">
                    <div class="has-feedback form-group mb-3" style="height: 70px;width: 350px;"><label class="form-label"  style="font-size: 20px;">Prénom</label><input class="form-control" type="text" name="Prenom" style="width: 300px;height: 30px;"></div>
                    <div class="has-feedback form-group mb-3" style="width: 350px;"><label class="form-label"  style="font-size: 20px;">Nom</label><input class="form-control" type="text" name="Nom" style="width: 300px;height: 30px;"></div>
                    <div class="has-feedback form-group mb-3"><label class="form-label"  style="font-size: 20px;">Téléphone</label><input class="form-control" type="tel" name="Telephone" style="font-size: 21px;height: 30px;width: 300px;"></div>
                </div>
                <div class="col-md-6" id="message-2" style="width: 682px;">
                    <div class="has-feedback form-group mb-3" style="width: 350px;"><label class="form-label"  style="font-size: 20px;">Email</label><input class="form-control" type="text" name="Email" style="width: 300px;height: 30px;"></div>
                    <div class="has-feedback form-group mb-3"><label class="form-label"  style="font-size: 20px;">Mot de passe</label><input class="form-control" type="text" name="MDP" style="width: 300px;height: 30px;"></div>
                </div>
            </div>
            <div class="row text-center d-xl-flex justify-content-xl-start">
                <div class="col"><button class="btn btn-primary text-center d-block w-100" type="submit" style="width: 300px;height: 45px;margin: 25px;margin-top: 0px;background-color: #ff0000;">Annuler<i class="typcn typcn-delete-outline"></i></button></div>
                <div class="col text-start d-xl-flex" style="padding-right: 50px;"><button class="btn btn-primary text-center d-block w-100" type="submit" name="valider" style="width: 300px;height: 45px;margin: 0px;margin-top: 0px;">Envoyer<i class="fa fa-chevron-circle-right"></i></button></div>
                <div class="col text-start d-xl-flex" style="padding-right: 50px;" class="btn btn-primary text-center d-block w-100" class="nav-item"><a class="nav-link" href="Connexion.php">DEJA INSCRIT</a><i class="fa fa-chevron-circle-right"></i></div>
            </div>
        </form>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php
if (isset ($_POST['valider'])){
    //On récupère les valeurs entrées par l'utilisateur :
    $Prenom=$_POST['Prenom'];
    $Nom=$_POST['Nom'];
    $MDP=$_POST['MDP'];
    $Email=$_POST['Email'];
    $Telephone=$_POST['Telephone'];


    //On se connecte
    $con = connectMaBase();

    //On prépare la commande sql d'insertion
    $sql = 'INSERT INTO CompteClients (password, lastname, name, email, telephone)  VALUES("'.$MDP.'","'.$Nom.'","'.$Prenom.'","'.$Email.'","'.$Telephone.'")';

    /*on lance la commande (mysql_query) et au cas où,
    on rédige un petit message d'erreur si la requête ne passe pas (or die)
    (Message qui intègrera les causes d'erreur sql)*/
    mysqli_query ($con,$sql) or die ('Formulaire incomplet ou mal remplie');

    header('Location: connexion.php');


    // on ferme la connexion
    mysqli_close($con);
}




?>



</body>

</html>

