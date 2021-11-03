<?php

class Product {
    private $name;
    private $surname;
    private $eta;
    private $discount;

    /**
     * @param str $_name nome del prodotto
     * @param str $_description descrizione del prodotto
     * @param num_int $_stars min=1 max=5
     * @param num $_price (0.00) not < 0.1
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