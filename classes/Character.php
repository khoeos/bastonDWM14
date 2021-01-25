<?php

class Character
{
    public $healthPoints = 100;
    public $damage = 15;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function attack($target) {
        $target->healthPoints -= $this->damage;
        $status =  "Coup d'épée";
        return $status;
    }
}
