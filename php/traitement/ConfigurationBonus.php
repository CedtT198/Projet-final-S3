<?php 
require ('../../../inc/function.php') ;

$idCueilleurs = $_POST['idCueilleurs'];
$poidsMinimum = $_POST['poidsMinimum'];
$bonus = $_POST['bonus'];
$mallus = $_POST['mallus'];

$requet = "UPDATE the_cueilleurs SET poidsminimal = %d,bonus = %d,mallus = %d  WHERE id = %d " ;
$requet = sprintf($requet,$poidsMinimum,$bonus,$mallus,$idCueilleurs);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../model.php?page=configuration'); 
}

?>