<?php
include("fonctions.php");
?>
<html>
<head><title>Formulaire de saisie utilisateur </title></head>
<body>
<h1>Inscrivez-vous !</h1>
<h2>Entrez les données demandées :</h2>
<form name="inscription" method="post" action="formulaires.php">
    Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
    Entrez votre mdp : <input type="text" name="mdp"/> <br/>
    Entrez votre nom : <input type="text" name="nom"/><br/>
    Entrez votre Email : <input type="text" name="Email"/><br/>
    Entrez votre Numero de telephone : <input type="number" name="Telephone"/><br/>
    Entrez votre Domicile : <input type="text" name="Domicile"/><br/>
    <input type="submit" name="valider" value="OK"/>
</form>
<?php
if (isset ($_POST['valider'])){
    //On récupère les valeurs entrées par l'utilisateur :
    $Prenom=$_POST['pseudo'];
    $Nom=$_POST['nom'];
    $MDP=$_POST['mdp'];
    $Email=$_POST['Email'];
    $Telephone=$_POST['Telephone'];
    $Domicile=$_POST['Domicile'];

    //On se connecte
    $con = connectMaBase();

    //On prépare la commande sql d'insertion
    $sql = 'INSERT INTO inscription (MDP, Nom, Prenom, Email, Telephone, Domicile)  VALUES("'.$MDP.'","'.$Nom.'","'.$Prenom.'","'.$Email.'","'.$Telephone.'","'.$Domicile.'")';

    /*on lance la commande (mysql_query) et au cas où,
    on rédige un petit message d'erreur si la requête ne passe pas (or die)
    (Message qui intègrera les causes d'erreur sql)*/
    mysqli_query ($con,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($con));

    // on ferme la connexion
    mysqli_close($con);
}
?>
</body>
</html>