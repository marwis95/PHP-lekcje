<?php
/*$imie='Marek';
$osoba=array(
	    'imie'=>'Marek',
	    'nick'=>'Marwis95',
	    'zarabia'=>87
	    );

print_r($osoba);
echo('<br>');
echo($osoba[imie]);
echo('<br>');
echo(count($osoba));//liczenie elementów tablicy
//print_r($tab); wypisywanie całej tablicy (values- numery, keys- nazwy)
//echo($tab[1]); wypisywanie zwykłe */

$liczby=range(1,49);
print_r($liczby);
echo('<br>');
$los = array_rand($liczby,6);
//print_r($los);
echo('Wylosowane: '.implode(',', $los));
//shuffle- mieszanie, push- dopisywanie
//$tab[] = 'aaa' też dopisywanie, tylko szybciej


?>