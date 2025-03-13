<?php?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<label for="id_kwota">Ilośc wypożyczonych pieniędzy (w zł): </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if(isset($kwota)) print($kwota); ?>" /><br />
	<label for="id_length">Długość trwania kredytu (w latach): </label>
	<input id="id_length" type="text" name="length" value="<?php if(isset($length)) print($length); ?>" /><br />
    <label for="id_stopa">Wysokość stopy procentowej kredytu (w %): </label>
    <input id="id_stopa" type="text" name="stopa" value="<?php if(isset($stopa)) print($stopa); ?>" /> <br />
	<input type="submit" value="Oblicz miesięczną stawkę kredytu" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
			if (count ( $messages ) > 0) {
				echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
				foreach ( $messages as $key => $msg ) {
					echo '<li>'.$msg.'</li>';
				}
			echo '</ol>';
		}
}
?>

<?php if (isset($rata_mies)){ ?>
<div style="margin: 10px; padding: 10px; border-radius: 5px; background-color: #0f0; width:525px;">
<?php echo 'Wysokość miesięcznej raty kredytu (w zaokrągleniu do 2) wynosi: '.$rata_mies .' złotych' ?>
</div>
<?php } ?>

<div style="width: 98%; margin: 20px auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

</body>
</html>