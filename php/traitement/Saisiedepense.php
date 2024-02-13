<?php 
require ('../../../inc/function.php') ;

$date = $_POST['date'];
$categorieDepense = $_POST['categorieDepense'];
$montant = $_POST['montant'];
$idparcelle = $_POST['choixParselle'];

$requet = "INSERT INTO the_depenses (montant,datedepense, idParcelle, idCategorie_depense) VALUES (%d,'%s', %d,%d)";
$requet = sprintf($requet,$montant,$date, $idparcelle,$categorieDepense);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../model.php?page=depense'); 
}
?>