<?php

class User {
    private $name;
    private $surname;
    private $eta;
    private $premium;
    public $user_discount;

    /**
     * @param string $_name nome dell'utente
     * @param string $_surname cognome dell'utente
     * @param integer $_eta età dell'utente
     * @param bool $_premium Opzionale, imposta true se utente = premium
     */
    function __construct($_name, $_surname, $_eta, $_premium = false)
    {
        $this->name = $_name;
        $this->description = $_surname;
        $this->stars = $_eta;
        $this->premium = $_premium;

        if($this->premium == true){
            $this->user_discount = 0.35;
        }
    }

    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEta(){
        return $this->eta;
    }
}