<?php
$liczba1 = $_GET['liczba1'];
$liczba2 = $_GET['liczba2'];

$wynik1  = $liczba1 + $liczba2;
$wynik2  = $liczba1 - $liczba2;
$wynik3  = $liczba1 * $liczba2;
$wynik4  = $liczba1 / $liczba2;

echo("Wynik dodawania: $wynik1<br>");
echo("Wynik odejmowania: $wynik2<br>");
echo("Wynik mnozenia: $wynik3<br>");
echo("Wynik dzielenia: $wynik4<br>");
?>

