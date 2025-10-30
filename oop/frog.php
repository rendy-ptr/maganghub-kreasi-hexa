<?php
require_once './animal.php';

class Frog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 4;
        $this->cold_blooded = 'no';
    }

    public function jump()
    {
        return "hop hop";
    }
}
