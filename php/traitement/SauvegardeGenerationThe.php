<?php 
require ('../../../inc/function.php') ;

$idThe = $_POST['idThe'];

$requet = "DELETE FROM the_saison WHERE idThe = %d ";
$requet = sprintf($requet,$idThe);

if(isset($_POST['date'])) {
    mysqli_query(dbconnect(),$requet);

    $dateGeneration = $_POST['date'];
    foreach($dateGeneration as $mois) {
        InsertionGenerationThe($idThe, $mois);
    }
} 

header('Location:../model.php?page=sauvegarde'); 
?>