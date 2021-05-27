<?php
include_once "Mineur.php";
class Ado extends Mineur {
    private $assr;

    function __construct($nom="",$prenom="",$age="",$classe="", $assr){
        parent::__construct($nom , $prenom , $age , $classe);
        $this->assr = $assr;
    }
     /**
     * Get the value of assr
     */ 
    public function getAssr()
    {
        return $this->assr;
    }
    /**
     * Set the value of assr
     *
     * @return  self
     */ 
    public function setAssr($assr)
    {
        $this->assr = $assr;

        return $this;
    }

    function afficher(){
        parent::afficher();
        echo ($this->assr) ? "J'ai le Assr<br/><br/>" : "Je n'ai pas le assr</br><br/>";
    }

   
}