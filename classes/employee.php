<?php
require_once __DIR__ . "/user.php";
class Employee extends User {

    function __construct($_name, $_surname, $_eta, $_premium = false)
    {
        parent::__construct($_name, $_surname, $_eta, $_premium);

        $this->user_discount = 0.90;
    }
}