<?php

//function ocena($stopien=5){

//if ($stopien<=2){
//echo('Slabo<br>');
//} elseif ($stopien<=3){
//echo('Srednio<br>');
//} else{
//echo('Super<br>');
//}

//}

//function pole($a, $b){
//return $a * $b;
//}

//ocena(1);
//ocena();
//ocena();
//ocena();
//ocena(); 
//echo('Pole wynosi: '.pole(5,3));

function parzysta($liczba){
if ($liczba%2==0) return true; else return false;
}

$zmienna = 6;

if (parzysta($zmienna)){
echo('Parzysta');
} else {
echo('Nieparzysta');
}

?>