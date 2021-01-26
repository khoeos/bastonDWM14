<?php

require './classes/Character.php';

$player1 = new Character('Blanka');
$player2 = new Character('Salamèche');



while ($player1->isAlive() && $player2->isAlive()) {
    echo $player1->attack($player2);
    echo '<br>';

    if ($player2->isAlive()) {
        echo $player2->attack($player1);
        echo '<br>';
    }
    echo '<br>';
}



var_dump($player1, $player2);