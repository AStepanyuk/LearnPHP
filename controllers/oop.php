<?php


use Cards\Card;
use Cards\StuffCard;


$card1 = new Card(Card::TYPE_DOOR, " Cartochka ", 1);


$golovnyak = new StuffCard(Card::TYPE_DOOR, " Cartochka ", 1);
$golovnyak->getPrice(200);



//echo $card1->getName();



echo "<hr><pre>";
var_dump($golovnyak);

