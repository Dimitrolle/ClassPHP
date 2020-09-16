<?php
include 'Personages.php';
$perso1 =new Personages(20,0.0,20,"John Cena");
$perso2 =new Personages(1,1.0,10,"Jean-Raoul SCOUT");


/*
Perso1 experience et parle
------------------------
$perso1->getExperience();
$perso1->gagnerExperience();
$perso1->getExperience();
$perso1->parler();
---------------------
Perso2 frapper
-------------------------
$perso1->frapper($perso2);
$perso2->getDegats();
--------------------------
Perso3 cloner puis détruit
---------------------
$perso3 =new Personages(0,0.0,0,"");
$perso3 = clone($perso2);
$perso3->parler();
$perso3 = destruct;
$perso3->parler();
-------------------------
Perso4 constante

$perso4 =new Personages(Personages::FORCE_PETITE,0.0,7789,"baguette kun");

$perso4 ->getForce();
*/


?>