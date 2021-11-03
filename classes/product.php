<?php
require_once __DIR__ . "/user.php"

class Product {
    private $name;
    private $description;
    private $stars;
    private $price;
    protected $discount;

    /**
     * @param str $_name nome del prodotto
     * @param str $_description descrizione del prodotto
     * @param num_int $_stars min=1 max=5
     * @param num $_price (0.00) not < 0.1
     */
    function __construct($_name, $_description, $_stars, $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->stars = $_stars;
        $this->price = $_price;
        $this->discount = 0;
    }

    function getName(){
        return $this->name;
    }
    function getDescription(){
        return $this->description;
    }
    function getStars(){
        return $this->stars;
    }
    function getPrice(){
        $finalPrice = $this->price - ($this->price * $this->discount);
        return number_format($finalPrice, 2, '.', ',');
    }

}