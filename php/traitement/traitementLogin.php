<?php 
require ('../../../inc/function.php') ;
session_start();
$bdd = dbconnect() ;

$nom= $_GET['nom'] ;
$password = $_GET['password'] ;  
$AdminOrClient = $_GET['AdminOrClient'] ;  

$requet = 'SELECT * FROM the_utilisateur WHERE isadmin = '.$AdminOrClient.'' ;
$resultat = mysqli_query($bdd , $requet ) ;

while ( $donnee = mysqli_fetch_assoc($resultat) ) 
{
    if ( $nom == $donnee['nom'] ) 
    {
        if ( $password  == $donnee['motdepasse'] ) 
        {
            $_SESSION['isadmin'] = $donnee['isadmin'];
            if ($donnee['isadmin'] == 0) 
            {
                header('Location:../model.php?page=list-variete'); // direction vers page admin
                break ;
            } else {
                header('Location:../model.php?page=cueillette'); // direction vers page client
                break ;
            }
        }
        else {
            header('Location:../login.php?indice=0'); // direction vers page index avec erreur  mot de passe
        }
    }
    else{
        header('Location:../login.php?indice=1'); // direction vers page index avec erreur nom inexiste
    }
    
}
mysqli_free_result($resultat) ;
// header('Location:../login.php?indice=1'); 
?>