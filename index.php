<?php
require ('metier/Personages.php');
/*
$perso1 =new Personages(20,0.0,20,"John Cena");
$perso2 =new Personages(1,1.0,10,"Jean-Raoul SCOUT");
$perso5 =new Personages(1,1.0,10,"Jean-Raoul SCOUT");
*/
$data1 =array('force'=> 10,'localisation'=>5.6,'age'=>15,'nom'=>"Hasagi");


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
-----------------------
Perso comparaison
-----------------

//test tout l'objet ainsi que l'emplacement mémoire
if ($perso2 === $perso5)
{
    echo 'oui ';
}
else
{
    echo 'non ';
}
//test attribut par attribut
if ($perso2 == $perso5)
{
    echo 'oui';
}
else
{
    echo 'non';
}
-------------------------
*/
$Perso6 = new Personages($data1);

$Perso6->parler();

?>