<?php
include_once "Mineur.php";
class Enfent extends Mineur {
    private $jeu;

    function __construct($nom="" ,$prenom="",$age="", $classe="" , $jeu){
        parent::__construct($nom, $prenom, $age, $classe);
        $this->jeu = $jeu;
    }

    /**
     * Get the value of jeu
     */ 
    public function getJeu()
    {
        return $this->jeu;
    }

    /**
     * Set the value of jeu
     *
     * @return  self
     */ 
    public function setJeu($jeu)
    {
        $this->jeu = $jeu;

        return $this;
    }
    function afficher(){
        parent::afficher();
        echo ($this->jeu) ? "J'ai le jeu<br/><br/>" : "Je n'ai pas le jeu</br><br/>";
    }
}