<?php
/**ecrire un script qui genere deux points: un point A (xA,yA) et un point B (xB,yB)
* le script affiche les deux point et affiche la distance qu separe ces deux point*/
const min=1;
const max=50;
$xA=rand(max,min);
$yA=rand(max,min);
$xB=rand(max,min);
$yB=rand(max,min);
$D=sqrt(pow($xA-$xB,2)+pow($yA-$yB,2));
echo("la distance est".$D."<br>");
echo("le point A est($xA,$yA)"."<br>");
echo("le point B est($xB,$yB)"."<br>");











?>