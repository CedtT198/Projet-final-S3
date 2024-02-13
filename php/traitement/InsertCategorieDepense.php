<?php 
require ('../../../inc/function.php') ;

$CategorieDepense = $_POST['CategorieDepense'];

$requet = "INSERT INTO the_categories_depense (nom) VALUES ('%s')";
$requet = sprintf($requet,$CategorieDepense);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../model.php?page=insert-categories-depenses'); 
}
?>