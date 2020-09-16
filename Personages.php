<?php


class Personages
{
    private $_force; // La force du personnage
    private $_localisation; // Sa localisation
    private $_experience = 50; //Son expérience
    private $_degats; // Ses dégâts
    private $_age;
    private $_nom;


    /**
     * Personages constructor.
     * @param $_force
     * @param $_localisation
     * @param $_nom
     * @param $_degats
     * @param $_age
     */
    public function __construct($_force, $_localisation, $_degats, $_age,$_nom)
    {
        $this->_force = $_force;
        $this->_localisation = $_localisation;
        $this->_degats = $_degats;
        $this->_age = $_age;
        $this->_age = $_nom;
    }


    public function gagnerExperience(Personages $UnPerso)
    {
        $this->_experience+= ceil ($this->_age*0.45);
    }

    public function frapper(Personages $UnPerso)
    {
    }
    public function afficherExperience(Personages $UnPerso)
    {
        echo $this->_experience;
    }

    public function parler()
    {
        echo 'Je suis '.$this->_nom;
    }
}