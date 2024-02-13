<?php 
function dbconnect()
{
    static $bdd = null;
    if ($bdd === null) {
        $bdd = mysqli_connect('172.10.0.113', 'ETU002715', 'Ks0sSWk3XmK9', 'db_p16_ETU002715');
        // $bdd = mysqli_connect('localhost', 'root', '', 'the');
    }
    return $bdd;
}
?>