<?php
setcookie('nick',base64_encode('marwis'), time()+60*60);   //nazwa, wartość, ważność
//echo(time()); czas w systemach unix

echo('Twoj nick to: '. base64_decode($_COOKIE['nick']));
?>