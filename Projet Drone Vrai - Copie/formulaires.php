<?php
include("fonctions.php");
?>
<html>
<head><title>Formulaire de saisie utilisateur </title></head>
<body>
<h1>Inscrivez-vous !</h1>
<h2>Entrez les données demandées :</h2>
<form name="inscription" method="post" action="formulaires.php">
    Entrez votre Email : <input type="text" name="Email"/><br/>
    Entrez des info pour la commande si necessaire : <input type="text" name="infocommande"/><br/>
    Entrez votre Domicile : <input type="text" name="Lieu"/><br/>
    <input type="submit" name="valider" value="OK" href="Payment/Payment.html"/>
</form>
<?php
if (isset ($_POST['valider'])){
    //On récupère les valeurs entrées par l'utilisateur :
    $Email=$_POST['Email'];
    $infocommande=$_POST['infocommande'];
    $lieu=$_POST['Lieu'];

    //On se connecte
    $con = connectMaBase();
    $random=9;
    //On prépare la commande sql d'insertion
    $sql = 'INSERT INTO Commande (idCommande, infocommande, lieu, CompteClients_email)  VALUES("'.$random.'","'.$infocommande.'","'.$lieu.'","'.$Email.'")';



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