<html>
<head>
<title>Strona PHP</title>
</head>

<body>
<form method="post" action="/info.php">
<input type="text" name="pole">
<input type="submit" value="Wyslij">
</form>

<?php
if (preg_match('@^[A-Z][a-z]{2,10} [A-Z]				[a-z]{2,15}$@',$_POST['pole'])){
echo('ok');
} else{
echo('error');
}
?>

</body>
</html>