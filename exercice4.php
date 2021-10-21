<?php /**
 * ecrire un script qui génere un jour , un mois et une année
 * puis vérifie si la date généreé est valide ou pas.
 */
define("maxa", 2030);
define("mina", 2000);
$annee = rand(maxa, mina);

define("maxm", 12);
define("minm", 1);
$mois = rand(maxm, minm);

define("maxj", 31);
define("minj", 1);
$jour = rand(maxj, minj);

if ($mois=4) {
    $jour==30;
}
elseif ($mois=6) {
    $jour==30;
}
elseif ($mois=9) {
    $jour==30;
}
elseif ($mois=11) {
    $jour==30;
}
elseif (($mois=2) && ($annee%100==0) && ($annee%400==0)) {
    $jour==29;
}
elseif (($annee%100==!0) && ($annee%4==0)) {
    $jour==29;
}
else {
    $jour==28;
}
echo("le jour est $jour/$mois/$annee");

