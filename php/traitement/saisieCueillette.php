<?php 
require ('../../../inc/function.php') ;

$date = $_POST['date'];
$choixCueilleur = $_POST['choixCueilleur'];
$choixParselle = $_POST['choixParselle'];
$poidCueilli = $_POST['poidCueilli'];


$result = GetTheParParcelle($choixParselle);
$cueilleur = CueilleurParId($choixCueilleur);
$poidThe = $result['poidsRestant'];
$idThe = $result['idThe'];
$verification = 0; // 0 si non valider et 1 si valider
$bonus = 0;
$mallus = 0; 
$montantPaiement = 0;

if ($poidThe > $poidCueilli) {
    $poidsRestant = $poidThe - $poidCueilli;
    $montantPaiement = $cueilleur['salaire'] * $poidCueilli;
    UpdatePoidsThe($idThe,$poidsRestant);
    InsertCueillette($date,$choixCueilleur,$choixParselle,$poidCueilli);
    if ($cueilleur['poidsminimal'] < $poidCueilli ) {
        $bonus = $cueilleur['bonus'];
    } else {
        $mallus = $cueilleur['mallus'];
    }
    InsertPaiementsCueilleur($date  ,$cueilleur['nom'],$poidCueilli,$bonus,$mallus,$montantPaiement);
    $verification = 1;
} else {
    $verification = 0;
}

header( "Content-Type: application/json"); 
echo json_encode($verification);
?>