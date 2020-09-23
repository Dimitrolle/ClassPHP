<?php


class Personages
{
    private $_force; // La force du personnage
    private $_localisation; // Sa localisation
    private $_experience = 50; //Son expérience
    private $_degats = 0; // Ses dégâts
    private $_age;
    private $_nom;


    //constante
    const FORCE_PETITE = 1;
    const FORCE_MOYENNE = 25;
    const FORCE_GRANDE = 50;

    /**
     * Personages constructor.
     * @param $_force
     * @param $_localisation
     * @param $_nom
     * @param $_age
     */
    public function __construct($_force, $_localisation, $_age, $_nom)
    {
        $this->_force = $_force;
        $this->_localisation = $_localisation;
        $this->_age = $_age;
        $this->_nom = $_nom;
    }

    /**
     * @return mixed
     */
    public function getForce()
    {
        echo $this->_force;
    }

    public function getExperience()
    {
        echo $this->_experience . 'pour le personnages' . $this->_nom;
    }

    public function getDegats()
    {
        echo 'le personnage ' . $this->_nom . ' à subit ' . $this->_degats . ' de dégats';
    }

    public function gagnerExperience()
    {
        $this->_experience += ceil($this->_age * 0.45);
    }

    public function frapper(Personages $UnPerso)
    {
        $UnPerso->_degats = $this->_force + $UnPerso->_degats;
    }

    public function parler()
    {
        echo 'Je suis ' . $this->_nom . ' et j\'ai ' . $this->_age . ' ans';
    }

    public function _construct(array $data)
    {
        $this->hydrate($data);
    }
    public function hydrate(array$donnees)
    {
        foreach($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
             if(method-exists($this.$method))
             {
                 $this->$method($value);
             }
        }
    }
}