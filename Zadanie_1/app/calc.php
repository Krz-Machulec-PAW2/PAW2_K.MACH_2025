<?php

require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$length = $_REQUEST ['length'];
$stopa = $_REQUEST ['stopa'];


if ( ! (isset($kwota) && isset($length) && isset($stopa))) { // sprawdzenie czy zmienne zostały zainicjowane
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $length == "") {
	$messages [] = 'Nie podano długości trwania kredytu';
}

if ( $stopa == "") {
	$messages [] = 'Nie podano stopy procentowej kredytu';
}

if (empty( $messages )) { // sprawdzenie czy wprowadzone wartości są dodatnimi wartościami numerycznymi
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Podana wartość kwoty kredytu jest niepoprawna';
	}
	if ($kwota < 0){
		$messages [] = 'Kwota kredytu nie może być ujemna';
	}
	if (! is_numeric( $length )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if ($length < 0) {
		$messages [] = 'Nie można wziąść kredytu na ujemną liczbę lat';
	}

	if (! is_numeric( $stopa )) {
		$messages [] = 'Podana wartość stopy procentowej kredytu jest niepoprawna';
	}

	if($stopa < 0) {
		$messages [] = 'Stopa procentowa kredytu nie może być ujemna';
	}

}


if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na odpowiednie wartości (double i int)
	$kwota = doubleval($kwota);
	$length = intval($length);
	$stopa = doubleval($stopa);
	
	$rata_mies = 0;

	$rata_mies = ($kwota / (12 * $length)) + ($kwota * ($stopa / 100)) / (12 * $length);
	$rata_mies = number_format((double)$rata_mies, 2, '.', '');
	
}

include 'calc_view.php';
