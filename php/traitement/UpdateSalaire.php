<?php 
require ('../../../inc/function.php') ;

$id = $_POST['id'];
$salaire = $_POST['salaire'];

ConfigurationSalaireCueilleur($id, $salaire);
header('Location:../model.php?page=change-salaire'); 
?>