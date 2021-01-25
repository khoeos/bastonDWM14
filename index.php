<?php

require './classes/Character.php';

$player1 = new Character('Blanka');
$player2 = new Character('Salamèche');

echo $player1->attack($player2);


var_dump($player1, $player2);