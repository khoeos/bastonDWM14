<?php

class Character
{
    protected $healthPoints = 100;
    protected $magicPoints = 20;
    public $damage = 15;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function attack($target) {
        $target->healthPoints -= $this->damage;
        $target->isAlive();
        $status = "$this->name donne un coup d'épée à $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }

    public function isAlive() {
        if ($this->healthPoints <= 0) {
            $this->healthPoints = 0;
            return false;
        } else {
            return true;
        }
    }

    public function getHealthPoints() {
        return $this->healthPoints;
    }

    // public function setHealthPoints($value) {
    //     $this->healthPoints = $value;
    // }
}
