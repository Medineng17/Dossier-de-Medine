<?php
/**ecrire un scrip qui genere trois nombre puis les tri dans l'ordre croissant puis 
 * dans l'ordre decroissant */
const max=100;
const min=1;
$a=rand(min,max);
$b=rand(min,max);
$c=rand(min,max);
if($a<$b &&  $b<$c){
    echo("les nombres sont dans l'ordre croissant ". "$a, $b,$c" . "<br>");
    echo("les nombres sont dans l'ordre decroissant ". "$c, $b,$a" );
}
elseif ($b<$c && $c<$a) {
    echo("les nombres sont dans l'ordre croissant ". "$b, $c, $a" . "<br>" );
    echo("les nombres sont dans l'ordre decroissant ". "$a, $c,$b" );
}
elseif($c<$a && $a<$b){
    echo("les nombres sont dans l'ordre croissant ". "$c, $a, $b" . "<br>");
    echo("les nombres sont dans l'ordre decroissant ". "$b, $a, $c");
}











?>