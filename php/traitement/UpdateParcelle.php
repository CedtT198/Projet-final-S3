<?php 
require ('../../../inc/function.php') ;

$numeroParcelles = $_POST['numeroParcelles'];
$surface = $_POST['surface'];
$idThe = $_POST['idThe'];

$requet = "UPDATE parcelles SET surface = %d ,idThe = %d WHERE numeroParcelles = %d ";
$requet = sprintf($requet,$surface,$idThe,$numeroParcelles);

if (mysqli_query(dbconnect(),$requet)) 
{
    header('Location:../index.php'); 
}
?>