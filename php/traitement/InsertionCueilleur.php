<?php 
require ('../../../inc/function.php') ;

$nom = $_POST['nom'];
$genre = $_POST['genre'];
$datenaissance = $_POST['datenaissance'];
$salaire = $_POST['salaire'];

$requet = "INSERT INTO the_cueilleurs (nom,genre,datenaissance,salaire) VALUES ('%s','%s','%s',%d)";
$requet = sprintf($requet,$nom,$genre,$datenaissance,$salaire);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../model.php?page=insert-cueilleur'); 
}
?>