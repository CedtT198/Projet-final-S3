<?php 
require ('../../../inc/function.php') ;

$idThe = $_POST['idThe'];
$variete = $_POST['variete'];
$occupation = $_POST['occupation'];
$rendement = $_POST['rendement'];

$requet = "UPDATE the SET variete = '%s' ,occupation = %d,rendement = %d WHERE id = %d";
$requet = sprintf($requet,$variete,$occupation,$rendement,$idThe);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../index.php'); 
}
?>