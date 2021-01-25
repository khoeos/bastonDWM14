<?php

require './classes/Character.php';

$player1 = new Character('Blanka');
$player2 = new Character('Salamèche');



while ($player1->healthPoints > 0 && $player2->healthPoints > 0) {
    echo $player1->attack($player2);
    echo '<br>';

    if ($player2->healthPoints > 0) {
        echo $player2->attack($player1);
        echo '<br>';
    }
}



var_dump($player1, $player2);
