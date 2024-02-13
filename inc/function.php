<?php 
include ('connexion.php') ;

// function ToutsDepense($date) {
//     $result = array() ;
//     $requet = "SELECT * FROM depenses WHERE datedepense = '%s' ";
//     $requet = sprintf($requet,$date);
//     $resultat = mysqli_query(dbconnect(),$requet) ;
    
//     while ( $donne = mysqli_fetch_array($resultat) ) {
//         $result[] = $donne ;
//     }
//     mysqli_free_result($resultat) ;

//     return $result ;
// }   

function ToutsCategorieDepense() {
    $result = array() ;
    $requet = "SELECT * FROM the_categories_depense";
    // $requet = sprintf($requet, $date);
    $resultat = mysqli_query(dbconnect(),$requet) ;
    
    while ( $donne = mysqli_fetch_array($resultat) ) {
        $result[] = $donne ;
    }
    mysqli_free_result($resultat) ;

    return $result ;
}   

function TousVarieteThe() {
    $result = array() ;
    $requet = "SELECT * FROM the_the";
    $resultat = mysqli_query(dbconnect(),$requet) ;
    
    while ( $donne = mysqli_fetch_array($resultat) ) {
        $result[] = $donne ;
    }
    mysqli_free_result($resultat) ;

    return $result ;
}

function TousParcelle() {
    $result = array() ;
    $requet = "SELECT * FROM the_parcelles";
    $resultat = mysqli_query(dbconnect(),$requet) ;
    
    while ( $donne = mysqli_fetch_array($resultat) ) {
        $result[] = $donne ;
    }
    mysqli_free_result($resultat) ;

    return $result ;
}

function TousCueilleur() {
    $result = array() ;
    $requet = "SELECT * FROM the_cueilleurs";
    $resultat = mysqli_query(dbconnect(),$requet) ;
    
    while ( $donne = mysqli_fetch_array($resultat) ) {
        $result[] = $donne ;
    }
    mysqli_free_result($resultat) ;

    return $result ;
}

function DeleteVarieteThe($id) {
    $requet = "DELETE FROM the_the WHERE id = %d";
    $requet = sprintf($requet,$id);
    mysqli_query(dbconnect(),$requet);
}

function DeleteParcelle($id) {
    $requet = "DELETE FROM the_parcelles WHERE numeroParcelles = %d";
    $requet = sprintf($requet,$id);
    mysqli_query(dbconnect(),$requet);
}

function DeleteCueilleur($id) {
    $requet = "DELETE FROM the_cueilleurs WHERE id = %d";
    $requet = sprintf($requet,$id);
    mysqli_query(dbconnect(),$requet);
}

function DeleteCategorieDepense($id) {
    $requet = "DELETE FROM the_categories_depense WHERE id = %d";
    $requet = sprintf($requet,$id);
    mysqli_query(dbconnect(),$requet);
}

function ConfigurationSalaireCueilleur($idCueilleur,$montant) {
    $requet = "UPDATE the_cueilleurs SET salaire = %d WHERE id = %d";
    $requet = sprintf($requet,$montant,$idCueilleur);
    mysqli_query(dbconnect(),$requet);
}

function GetTheParParcelle($numeroParcelle) {
    $requet = "SELECT * FROM the_parcelles JOIN the_the ON the_the.id = the_parcelles.idThe WHERE the_parcelles.numeroParcelles = %d ";
    $requet = sprintf($requet,$numeroParcelle);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;

    return $result ;
}

function UpdatePoidsThe($idThe,$nouvellePoids) {
    $requet = "UPDATE the_parcelles SET poidsRestant = %d WHERE numeroParcelles = %d ";
    $requet = sprintf($requet,$nouvellePoids,$idThe);
    mysqli_query(dbconnect(),$requet);
}

function InsertCueillette($date,$choixCueilleur,$choixParcelle,$poidsCueille) {
    $requet = "INSERT INTO the_cueillettes (daty,idCueilleur,idParcelle,poidsCueilli) VALUES ('%s',%d,%d,%d)";
    $requet = sprintf($requet,$date,$choixCueilleur,$choixParcelle,$poidsCueille);
    mysqli_query(dbconnect(),$requet);
}

// function TotalPoidsCueilletteParParcelle($dateDebut,$dateFin) {
//     $result = array();
//     $requet = "SELECT the_parcelles.numeroParcelles , SUM(the_cueillettes.poidsCueilli) AS totalCueillette FROM the_parcelles JOIN the_cueillettes ON the_cueillettes.idParcelle = the_parcelles.numeroParcelles WHERE the_cueillettes.daty BETWEEN '%s' AND '%s' GROUP BY the_parcelles.numeroParcelles ";
//     $requet = sprintf($requet,$dateDebut,$dateFin);
//     $resultat = mysqli_query(dbconnect(),$requet);
    
//     while ( $donne = mysqli_fetch_array($resultat) ) {
//         $result[] = $donne ;
//     }
//     mysqli_free_result($resultat) ;

//     return $result ;
// }

// function PoidsRestantParParcelle($dateFin) {
//     $result = array();
//     list($jour, $mois, $annee) = explode('-', $dateFin);

//     $requet = " SELECT tp.numeroParcelles, tp.poidsRestant FROM the_parcelles tp JOIN (SELECT idParcelle, MAX(daty) AS last_date FROM the_cueillettes WHERE YEAR(daty) = '%s' AND MONTH(daty) = '%s' ) AS tc ON tp.numeroParcelles = tc.idParcelle GROUP BY idParcelle";
//     $requet = sprintf($requet,$annee,$mois);
//     $resultat = mysqli_query(dbconnect(),$requet);
    
//     while ( $donne = mysqli_fetch_array($resultat) ) {
//         $result[] = $donne ;
//     }
//     mysqli_free_result($resultat) ;

//     return $result ;
// }

// function DepenseTotalParParcelle($dateDebut,$dateFin) {
//     $result = array();
//     $requet = "SELECT the_parcelles.numeroParcelles , SUM(montant) as somme FROM the_parcelles JOIN the_depenses ON the_parcelles.numeroParcelles = the_depenses.idParcelle WHERE the_depenses.datedepense BETWEEN '%s' AND '%s' GROUP BY the_parcelles.numeroParcelles ";
//     $requet = sprintf($requet,$dateDebut,$dateFin);
//     $resultat = mysqli_query(dbconnect(),$requet);
    
//     while ( $donne = mysqli_fetch_array($resultat) ) {
//         $result[] = $donne ;
//     }
//     mysqli_free_result($resultat) ;

//     return $result ;
// }


function InsertionGenerationThe($idThe,$mois) {
    $requet = "INSERT INTO the_saison (idThe,mois) VALUES (%d,%d) ";
    $requet = sprintf($requet,$idThe,$mois);
    mysqli_query(dbconnect(),$requet);
}

function ListePaiementCueilleur($dateDebut,$dateFin) {
    $result = array();
    $requet = "SELECT * FROM the_paiementsCueilleur WHERE daty BETWEEN '%s' AND '%s' ";
    $requet = sprintf($requet,$dateDebut, $dateFin);
    $resultat = mysqli_query(dbconnect(),$requet);
    
    while ( $donne = mysqli_fetch_array($resultat) ) {
        $result[] = $donne ;
    }
    mysqli_free_result($resultat) ;

    return $result ;
}

function CueilleurParId($id) {
    $result = array() ;
    $requet = "SELECT * FROM the_cueilleurs WHERE id = %d";
    $requet = sprintf($requet,$id);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;

    return $result ;
}

function InsertPaiementsCueilleur($date,$nomCueilleur,$poidsCueille,$bonus,$mallus,$montantPaiement) {
    $requet = "INSERT INTO the_paiementsCueilleur (daty,nomCueilleur,poids,bonus,mallus,montantPaiement) VALUES ('%s','%s',%d,%d,%d,%d)";
    $requet = sprintf($requet,$date,$nomCueilleur,$poidsCueille,$bonus,$mallus,$montantPaiement);
    mysqli_query(dbconnect(),$requet);
}


function PoidsTotalCueillette($dateDebut,$dateFin) {
    $result = array() ;
    $requet = "SELECT SUM(poidsCueilli) AS poidsTotalCueillette FROM the_cueillettes WHERE the_cueillettes.daty BETWEEN '%s' AND '%s'";
    $requet = sprintf($requet,$dateDebut,$dateFin);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;

    return $result ;
}

function PoidsRestantSurParcelle($dateDebut,$dateFin) {
    $result = array() ;
    $requet = "SELECT SUM(the_parcelles.poidsRestant) AS poidsRestantSurParcelle FROM the_cueillettes JOIN the_parcelles ON the_cueillettes.idParcelle = the_parcelles.numeroParcelles  WHERE the_cueillettes.daty BETWEEN '%s' AND '%s' " ;
    $requet = sprintf($requet,$dateDebut,$dateFin);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;

    return $result ;
}

function MontantDesVente($dateDebut,$dateFin) {
    $result = array() ;
    $requet = "SELECT SUM(the_the.prixvente) AS montantDesVente FROM the_cueillettes JOIN the_parcelles ON the_cueillettes.idParcelle = the_parcelles.numeroParcelles JOIN the_the ON the_parcelles.idThe = the_the.id WHERE the_cueillettes.daty BETWEEN '%s' AND '%s' " ;
    $requet = sprintf($requet,$dateDebut,$dateFin);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;

    return $result ;
}

function MontantDesDepense($dateDebut,$dateFin) {
    $result = array() ;
    $requet = "SELECT SUM(montant) AS MontantDesDepense FROM the_depenses WHERE datedepense  BETWEEN '%s' AND '%s' " ;
    $requet = sprintf($requet,$dateDebut,$dateFin);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;

    return $result ;
}

function benefice($MontantDeVente,$MontantDeDepense) {
    $benefice = $MontantDeVente - $MontantDeDepense ;
    return $benefice;
}

function CoutDeRevient($MontantDesDepense,$PoidsTotalCueillette) {
    $coutDeRevient = $MontantDesDepense / $PoidsTotalCueillette;
    return $coutDeRevient;
}




function PoidsRestantSurParcelleParDate($date) {
    $result = array() ;
    $requet = "SELECT SUM(the_parcelles.poidsRestant) AS poidsRestantSurParcelle FROM the_cueillettes JOIN the_parcelles ON the_cueillettes.idParcelle = the_parcelles.numeroParcelles  WHERE the_cueillettes.daty = '%s' " ;
    $requet = sprintf($requet,$date);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;
    
    return $result ;
}

function GetTheDansPaecelleParDate($date) {
    $result = array();
    $requet = "SELECT SUM(the_the.prixvente) AS montant FROM the_depenses JOIN the_parcelles ON the_parcelles.numeroParcelles = the_depenses.idParcelle JOIN the_the ON the_the.id = the_parcelles.idThe WHERE the_depenses.datedepense = '%s' ";
    $requet = sprintf($requet,$date);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;
    
    return $result ;
}

function ListeTheParParcelle($date) {
    $result = array();
    $requet = "SELECT * AS montant FROM the_depenses JOIN the_parcelles ON the_parcelles.numeroParcelles = the_depenses.idParcelle JOIN the_the ON the_the.id = the_parcelles.idThe WHERE the_depenses.datedepense = '%s' ";
    $requet = sprintf($requet,$date);
    $resultat = mysqli_query(dbconnect(),$requet);
    $result = mysqli_fetch_assoc($resultat);
    mysqli_free_result($resultat) ;
    
    return $result ;
}

?>