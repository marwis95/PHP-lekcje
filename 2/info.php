<html>
<body>

<form method="post" action="">
Zgadnij jaka liczbe wymyslilem<br>
liczba: <input type="text" name="liczba">
<input type="submit" value="wyslij">

</form>

<?php
$wynik = 512;

if ($_POST['liczba']>$wynik){
echo('Za duzo');
}
elseif ($_POST['liczba']<$wynik){
echo('Za malo');
}
else{
echo('Zgadles');
}

?>

</body>
</html>
