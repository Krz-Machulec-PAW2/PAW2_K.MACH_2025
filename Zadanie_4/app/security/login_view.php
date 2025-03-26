<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Strona Logowania</title>
</head>
<body>

<form action="<?php print(_APP_ROOT);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<label for="id_login">Login: </label>
	<input id="id_login" type="text" name="login"  ?><br />
	<label for="id_haslo">Hasło: </label>
	<input id="id_haslo" type="text" name="haslo"  ?><br />
    <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>

</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages2)) {
	if (count ( $messages2 ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages2 as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</body>
</html>