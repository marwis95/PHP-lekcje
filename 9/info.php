<?php

session_start();
if (isset($_GET['akcja']) && $_GET['akcja']=='wyloguj'){
unset($_SESSION['zalogowany']); //unset- usuwa zmienną
}

if (isset($_POST['haslo']) && $_POST['haslo']=='pass'){

$_SESSION['zalogowany'] = 1;

}
if (!isset($_SESSION['zalogowany'])){ //isset- czy istnieje

?>

<html>
<body>

<form method="post" action="info.php">
Haslo: <input type="text" name="haslo">
<input type="submit" value="ok">
</form>

</body>
</html>

<?php
} else {
?>
Tu moge bezpiecznie trzymac pornosy<br>
<a href="info.php?akcja=wyloguj">wyloguj</a>

<?php
}
?>