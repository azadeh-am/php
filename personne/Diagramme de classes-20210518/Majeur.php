<?php
include_once "Personne.php";
class Majeur extends Personne {
    private $vote;

    function __construct($nom="", $prenom="", $age="", $vote){
        parent::__construct($nom, $prenom, $age);
        $this->vote = $vote;
    }

    /**
     * Get the value of vote
     */ 
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set the value of vote
     *
     * @return  self
     */ 
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    function afficher(){
        parent::afficher();
        echo "vote : {$this->vote} <br/>";
    }

}