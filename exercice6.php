<?php
/** ecrire un script qui genere un jour un mois et une année puis determine et affiche
 *  la date suivante et la date précédente
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
$date=$jour."/".$mois."/".$annee;
if ($mois==4) {
    $jour=30;
}
elseif ($mois==6) {
    $jour=30;
}
elseif ($mois==9) {
    $jour=30;
}
elseif ($mois==11) {
    $jour=30;
}
elseif (($mois==2) && ($annee%100==0) && ($annee%400==0)) {
    $jour=29;
}
elseif (($annee%100==!0) && ($annee%4==0)) {
    $jour=29;
}
elseif ($mois==1){
    $jour=31;
}
elseif ($mois==3){
    $jour=31;
}
elseif ($mois==5){
    $jour=31;
}
elseif ($mois==7){
    $jour=31;
}
elseif ($mois==8){
    $jour=31;
}
elseif ($mois==10){
    $jour=31;
}
elseif ($mois==12){
    $jour=31;
}
else{
    $jour=28;
    }
if($jour<31 and $mois<12){
    $jour_precedent=$jour-1;
    $jour_suivant=$jour+1;
    $mois_lendemain=$mois+1;
    $mois_precedent=$mois;
}
elseif ($jour=31 and $mois==12) {
    $jour_precedent=$jour-1;
    $jour_suivant=1;
    $mois_lendemain=1;
    $mois_precedent=$mois;
    $annee_lendemain=$annee+1;
    $annee_precedente=$annee;
}
if($mois==2 and $annee%4==0 ) {
    $jour=29;
    if ($jour==29) {
        $jour_precedent=$jour-1;
        $jour_suivant=1;
        $mois_lendemain=$mois+1;
        $mois_precedent=$mois;
        $annee_lendemain=$annee;
        $annee_precedente=$annee;   
    }
      
    else {
        $jour=28;
        if ($jour==28) {
            $jour_precedent=$jour-1;
            $jour_suivant=1;
            $mois_lendemain=$mois+1;
            $mois_precedent=$mois;
            $annee_lendemain=$annee;
            $annee_precedente=$annee;
        }
            
    }
}

else  {
    $jour_precedent=$jour-1;
    $jour_suivant=$jour+1;
    $mois_lendemain=$mois+1;
    $mois_precedent=$mois;
    $annee_lendemain=$annee;
    $annee_precedente=$annee; 
}
echo("jour est ".$jour. "<br>");
echo("mois est ".$mois. "<br>");
echo("annee est ".$annee. "<br>");

echo("la date suivante est ".$jour_suivant."/".$mois_lendemain."/".$annee_lendemain. "<br>" );
echo("la date precedente est ".$jour_precedent."/".$mois_precedent."/".$annee_precedente. "<br>");
echo("la date du jour est ".$jour."/".$mois."/".$annee. "<br>");











?>