<?php
$host="51.210.151.13";
$port=3306;
$socket="";
$user="thermodrone";
$password="thermodrone";
$dbname="thermoDrone";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());

echo "<html>
<head>
    <title>Modification de l'adresse d'un propriétaire</title>
</head>
    <head>
        <title>Chef d'équipe</title>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <nav>
";

echo"<select>
              <optgroup label=\"technicien\">
";
$query = "SELECT email FROM thermoDrone.CompteEntreprise";

if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result( $field2);
    while ($stmt->fetch()) {
        echo"<option>{$field2}</option>";
    }
    $stmt->close();
}

echo"
                </optgroup>
            </select>";

echo "
     </nav>
    </body>
</html>";


//$con->close();

?>