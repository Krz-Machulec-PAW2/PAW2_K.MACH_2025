<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
    private $form;
    private $rata;

    public function __construct(){
        $this->form = new CalcForm();
        $this->rata = new CalcResult();
    }

    public function getparams(){

    $this->form->kwota = getFromRequest('kwota');
	$this->form->length = getFromRequest('length');
	$this->form->stopa = getFromRequest('stopa');
    
    }

    public function walidacja(){
        
        if ( ! (isset($this->form->kwota) && isset($this->form->length) && isset($this->form->stopa))) { // sprawdzenie czy zmienne zostały zainicjowane
            return false;
        }
        
        if ( $this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ( $this->form->length == "") {
            getMessages()->addError('Nie podano długości trwania kredytu');
        }
        
        if ( $this->form->stopa == "") {
            getMessages()->addError('Nie podano stopy procentowej kredytu');
        }
        
        if (! getMessages()->isError()) { // sprawdzenie czy wprowadzone wartości są dodatnimi wartościami numerycznymi
            
            if (! is_numeric( $this->form->kwota )) {
                getMessages()->addError('Podana wartość kwoty kredytu jest niepoprawna');
            }
            if ($this->form->kwota < 0){
                getMessages()->addError('Kwota kredytu nie może być ujemna');
            }
            if (! is_numeric( $this->form->length )) {
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }	
        
            if ($this->form->length < 0) {
                getMessages()->addError('Nie można wziąść kredytu na ujemną liczbę lat');
            }
        
            if (! is_numeric( $this->form->stopa )) {
                getMessages()->addError('Podana wartość stopy procentowej kredytu jest niepoprawna');
            }
        
            if($this->form->stopa < 0) {
                getMessages()->addError('Stopa procentowa kredytu nie może być ujemna');
            }
        
        }
        
        return ! getMessages()->isError();
        }

        public function oblicz(){ 
            $this->getparams();
    
            if ($this->walidacja()){

            $this->form->kwota = doubleval($this->form->kwota);
	    	$this->form->length = intval($this->form->length);
    		$this->form->stopa = doubleval($this->form->stopa);
            getMessages()->addInfo('Parametry poprawne');

            $this->rata->rata_mies = ($this->form->kwota / (12 * $this->form->length)) + ($this->form->kwota * ($this->form->stopa / 100 * $this->form->length)) / (12 * $this->form->length);
		    $this->rata->rata_mies = number_format((double)$this->rata->rata_mies, 2, '.', '');

            getMessages()->addInfo('Wykonano obliczenia');

            }
            else { $this->rata->rata_mies = null; }
            $this->generateView();
    }

    public function generateView(){

        getSmarty()->assign('page_title','Kalkulator kredytowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('rata',$this->rata);

        getSmarty()->display('CalcView.tpl');
    }

}
