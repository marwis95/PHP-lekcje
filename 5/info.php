<?php


/*
$nazwa_pliku = 'plik.txt'; //zmienna z nazwą pliku
$plik = fopen($nazwa_pliku,'r'); //zmienna z uchwytem (r-read)
$dane = fread($plik,filesize($nazwa_pliku)); //odczyt pliku (10 pierwszych bajtów, czyli 10 liter)
//filesize($nazwa_pliku) odczyt rzeczywistej długości pliku
fclose($plik); //zamknij uchwyt plik
echo(nl2br($dane));
//nl2br zamienia [enter] na <br>
*/

$nazwa_pliku = 'plik.txt';
$do_zapisania = 'marwis95';
$plik = fopen($nazwa_pliku,'a'); //a-add
fputs($plik, $do_zapisania); //fputs- dodawanie;
fclose($plik);

?>