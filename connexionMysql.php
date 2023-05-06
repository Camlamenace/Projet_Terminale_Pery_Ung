<?php
session_start();
$serveur='localhost';
$username='root';
$mdp='';
$base='tsg_base';

$connexion = mysqli_connect ($serveur,$username,$mdp,$base);
//comme connexionMysql.php est relié à tout les autres fichiers php ainsi ils ont tous des sessions et $connexion qui se ferme à la fin de chacun d'eux
?>