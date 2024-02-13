<?php 
require ('../../../inc/function.php') ;

$numeroParcelles = $_POST['numeroParcelles'];
$surface = $_POST['surface'];
$idThe = $_POST['idThe'];
$poidsRestant = $_POST['poidsRestant'];

$requet = "INSERT INTO the_parcelles (numeroParcelles,surface,idThe, poidsRestant) VALUES (%d,%d,%d, %d)";

$requet = sprintf($requet,$numeroParcelles,$surface,$idThe, $poidsRestant);

try {
    if (mysqli_query(dbconnect() ,$requet)) 
    {
        header('Location:../model.php?page=insert-parcelle'); 
    }
} catch (Exception $ex) {
    header('Location:../model.php?page=insert-parcelle&error=0'); 
}
?>