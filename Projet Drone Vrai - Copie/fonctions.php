<?php
function connectMaBase(){

    $host="51.210.151.13";
    $user="thermodrone";
    $password="thermodrone";
    $dbname="thermoDrone";

    $con = new mysqli($host, $user, $password, $dbname )
    or die ('Could not connect to the database server' . mysqli_connect_error());

    return $con;
}

?>