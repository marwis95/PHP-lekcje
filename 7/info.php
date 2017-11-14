<?php

class jablko{
var $kolor='czerwony';
var $waga=5;
}

$o_jablko  = new jablko;
$o_jablko->kolor = 'zielony';

$o_jablko2 = new jablko;

echo($o_jablko2->kolor.'<br>'.$o_jablko->kolor);


?>