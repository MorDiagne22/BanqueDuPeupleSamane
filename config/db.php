<?php
$host = "bdpsamane";
$dbname = "bdp";
$user = "root";
$mdp = "";
try
{
    $bd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user,$mdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    //echo 'CONNEXION REUSSIE!!!!';
}
catch (PDOException $e)
{
    die('Erreur de connexion a la base de donnees ..! Veuillez contacter l\'administrateur (Tito :)...');
}

?>