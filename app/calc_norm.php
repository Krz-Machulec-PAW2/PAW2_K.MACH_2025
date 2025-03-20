<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/libs/smarty/lib/Smarty.class.php';

//include _ROOT_PATH.'/app/security/check.php';


function getParms(&$kwota, &$length, &$rodzaj){

	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$length = isset($_REQUEST['length']) ? $_REQUEST['length'] : null;
    $rodzaj = isset($_REQUEST['rodzaj']) ? $_REQUEST['rodzaj'] : null;

}

function walidacja(&$kwota, &$length, &$messages){
if ( ! (isset($kwota) && isset($length))) { // sprawdzenie czy zmienne zostały zainicjowane
	return false;
}

if ( $kwota == "") {
	$messages [] = 'Pierwsza liczba nie jest poprawna';
}
if ( $length == "") {
	$messages [] = 'Druga liczba nie jest poprawna';
}

if (empty( $messages )) { // sprawdzenie czy wprowadzone wartości są dodatnimi wartościami numerycznymi
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza liczba nie jest poprawna';
	}
	if (! is_numeric( $length )) {
		$messages [] = 'Druga liczba nie jest poprawna';
	}	

}
	if (count($messages) != 0) return false;
	else return true;
}

function oblicz(&$kwota, &$length, &$rodzaj, &$messages, &$wynik){ 
		global $role;

		//konwersja parametrów na odpowiednie wartości (double i int)
		$kwota = intval($kwota);
		$length = intval($length);
        $rodzaj = strval($rodzaj);

        if($rodzaj == 'plus'){$wynik = $kwota + $length;}
        if($rodzaj == 'minus'){$wynik = $kwota - $length;}
        if($rodzaj == 'mnoz'){$wynik = $kwota * $length;}
        if($rodzaj == 'dziel'){$wynik = $kwota / $length;}

	
}

$kwota = null;
$length = null;
$rodzaj = null;
$wynik = null;
$messages = array();

getParms($kwota, $length, $rodzaj);
if (walidacja($kwota, $length, $messages)) {
	oblicz($kwota, $length, $rodzaj, $messages, $wynik);
}

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator standardowy');

$smarty->assign('kwota',$kwota);
$smarty->assign('length',$length);
$smarty->assign('rodzaj',$rodzaj);
$smarty->assign('wynik',$wynik);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc_norm.html');
