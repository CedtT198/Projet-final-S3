<?php 
require ('../../../inc/function.php') ;

$idCueilleur = $_POST['idCueilleur'];
$nom = $_POST['nom'];
$genre = $_POST['genre'];
$datenaissance = $_POST['datenaissance'];
$salaire = $_POST['salaire'];

$requet = "UPDATE cueilleurs SET nom = '%s',genre = '%s',datenaissance = '%s',salaire = %d WHERE id = %d";
$requet = sprintf($requet,$nom,$genre,$datenaissance,$salaire,$idCueilleur);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../index.php'); 
}
?>