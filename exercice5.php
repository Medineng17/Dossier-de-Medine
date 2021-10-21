<?php
 /** ecrire un script qui genere une année et un mois puis determine 
 * et affiche le nombre de jour de ce mois dans cette année
 */
const maxa=2040;
const mina=2000;
$annee=rand(maxa,mina);

const maxm=12;
const minm=1;
$mois=rand(maxm,minm);

const maxj=31;
const minj=1;
$jour=rand(maxj,minj);
echo(" mois est ".$mois);
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
elseif ($mois=1){
    $jour==31;
}
elseif ($mois=3){
    $jour==31;
}
elseif ($mois=5){
    $jour==31;
}
elseif ($mois=7){
    $jour==31;
}
elseif ($mois=8){
    $jour==31;
}
elseif ($mois=10){
    $jour==31;
}
elseif ($mois=12){
    $jour==31;
}
else{
    $jour==28;
}
echo(" jour est ". $jour);
echo(" annee est ". $annee);
?>