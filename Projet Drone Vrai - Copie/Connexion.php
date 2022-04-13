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
        <form class="align-content-center" id="contactForm" action="Connexion.php" method="GET">
            <fieldset style="width: 542px;">
                <legend style="font-style: normal;font-weight: bold;font-size: 28px;">Formulaire de Connexion</legend>
            </fieldset>
            <div class="row text-start" style="padding: 0px;">
                <div class="col-md-6" id="message-2" style="width: 682px;">
                    <div class="has-feedback form-group mb-3" style="width: 350px;"><label class="form-label" for="from_name" style="font-size: 20px;">Email</label><input class="form-control" type="text" name="Email" style="width: 300px;height: 30px;"></div>
                    <div class="has-feedback form-group mb-3"><label class="form-label" for="from_phone" style="font-size: 20px;">Mot de passe</label><input class="form-control" type="text" name="MDP" style="width: 300px;height: 30px;"></div>
                </div>
            </div>
            <div class="row text-center d-xl-flex justify-content-xl-start">
                <div class="col"><button class="btn btn-primary text-center d-block w-100" type="submit" style="width: 300px;height: 45px;margin: 25px;margin-top: 0px;background-color: #ff0000;">Annuler<i class="typcn typcn-delete-outline"></i></button></div>
                <input type="submit" name="valider" value="OK"/>
            </div>
        </form>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include("fonctions.php");
if (isset ($_GET['valider'])) {
    $dsn = 'mysql:host=localhost;dbname=thermodrone';

    $user = 'root';
    $password = 'issam93@';


    //On se connecte
    $con = connectMaBase();

    $query = "SELECT MDP,Email FROM thermodrone.inscription WHERE MDP=? AND Email=?";
    $stmt = $con->prepare($query);
    if (isset($stmt)) {
        $stmt->bind_param('ss',$_GET['MDP'],$_GET['Email']);
        $stmt->execute();
        //prend les reponse
        $stmt->bind_result($field1, $field2);
        while ($stmt->fetch()) {
            $tab = array($field1, $field2);
        }
        if (!empty($tab)) {
            header('location:index.html');
        } else {
            echo "Mot de passe faux";
        }
        $stmt->close();
    }
}

?>