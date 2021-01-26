<?php

require './classes/Character.php';
require './classes/Warrior.php';
require './classes/Mage.php';


$player1 = new Warrior('Blanka');
$player2 = new Mage('Salamèche');


while ($player1->isAlive() && $player2->isAlive()) {
    echo $player1->attack($player2);
    echo '<br>';

    if ($player2->isAlive()) {
        echo $player2->attack($player1);
        echo '<br>';
    }
    echo '<br>';
}


