<?php

class Product {
    private $name;
    private $surname;
    private $eta;
    private $discount;

    /**
     * @param str $_name nome dell'utente
     * @param str $_surname cognome dell'utente
     * @param num_int $_eta età dell'utente
     */
    function __construct($_name, $_surname, $_eta)
    {
        $this->name = $_name;
        $this->description = $_surname;
        $this->stars = $_eta;
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