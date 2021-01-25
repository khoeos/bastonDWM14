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
        $status =  "$this->name donne un coup d'épée à $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }
}
