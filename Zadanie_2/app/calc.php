<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';


function getParms(&$kwota, &$length, &$stopa){

	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$length = isset($_REQUEST['length']) ? $_REQUEST['length'] : null;
	$stopa = isset($_REQUEST['stopa']) ? $_REQUEST['stopa'] : null;

}

function walidacja(&$kwota, &$length, &$stopa, &$messages){
if ( ! (isset($kwota) && isset($length) && isset($stopa))) { // sprawdzenie czy zmienne zostały zainicjowane
	return false;
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
	if (count($messages) != 0) return false;
	else return true;
}

function oblicz(&$kwota, &$length, &$stopa, &$messages, &$rata_mies){ 
		global $role;

		//konwersja parametrów na odpowiednie wartości (double i int)
		$kwota = doubleval($kwota);
		$length = intval($length);
		$stopa = doubleval($stopa);

		$rata_mies = 0;

		$rata_mies = ($kwota / (12 * $length)) + ($kwota * ($stopa / 100 * $length)) / (12 * $length);
		$rata_mies = number_format((double)$rata_mies, 2, '.', '');
	
}

$kwota = null;
$length = null;
$stopa = null;
$rata_mies = null;
$messages = array();

getParms($kwota, $length, $stopa);
if (walidacja($kwota, $length, $stopa, $messages)) {
	oblicz($kwota, $length, $stopa, $messages, $rata_mies);
}

include 'calc_view.php';
