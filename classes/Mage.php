<?php

class Mage extends Character
{
    public $damage = 5;

    public function __construct($name) {
        parent::__construct($name);
        $this->magicPoints *= 5;
    }
}