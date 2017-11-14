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
if (preg_match('@^[0-9]{2}-[0-9]{3}$@',$_POST['pole'])){
echo('ok');
} else{
echo('error');
}
?>

</body>
</html>