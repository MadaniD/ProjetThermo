<?php
function connectMaBase(){

    $host="localhost";
    $user="root";
    $password="issam93@";
    $dbname="thermodrone";

    $con = new mysqli($host, $user, $password, $dbname )
    or die ('Could not connect to the database server' . mysqli_connect_error());

    return $con;
}

?>