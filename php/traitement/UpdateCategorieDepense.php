<?php 
require ('../../../inc/function.php') ;

$idCategorieDepense = $_POST['idCategorieDepense'];
$CategorieDepense = $_POST['CategorieDepense'];

$requet = "UPDATE categoriedepense SET nom = '%s' WHERE id = %d";
$requet = sprintf($requet,$CategorieDepense,$idCategorieDepense);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../index.php'); 
}
?>