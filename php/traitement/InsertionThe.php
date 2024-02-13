<?php 
require ('../../../inc/function.php') ;

$variete = $_POST['variete'];
$occupation = $_POST['occupation'];
$rendement = $_POST['rendement'];
$prixvente = $_POST['prixvente'];

$requet = "INSERT INTO the_the (variete,occupation,rendement, prixvente) VALUES ('%s',%d,%d, %d)";
$requet = sprintf($requet,$variete,$occupation,$rendement, $prixvente);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../model.php?page=insert-variete'); 
}
?>