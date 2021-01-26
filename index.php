<?php

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

$player1 = new Warrior('Blanka');
$player2 = new Mage('Salamèche');

var_dump($player1, $player2); die;

while ($player1->isAlive() && $player2->isAlive()) {
    echo $player1->attack($player2);
    echo '<br>';

    if ($player2->isAlive()) {
        echo $player2->attack($player1);
        echo '<br>';
    }
    echo '<br>';
}
