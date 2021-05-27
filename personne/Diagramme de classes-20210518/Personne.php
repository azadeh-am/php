<?php
class Personne{
    private $nom;
    private $prenom;
    private $age;

    function __construct($nom , $prenom , $age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }
    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
    public function afficher(){
        echo "Nom : {$this->nom} <br/>";
        echo "Prenom : {$this->prenom} <br/>";
        echo "Age : {$this->age} <br/>";
    }
}