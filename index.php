<?php
include 'Personages.php';
$perso1 =new Personages(20,0.0,20,"John Cena");
$perso2 =new Personages(1,1.0,10,"Jean-Raoul SCOUT");

/*
$perso1->getExperience();
$perso1->gagnerExperience();
$perso1->getExperience();
$perso1->parler();
*/
$perso1->frapper($perso2);
$perso2->getDegats();

?>