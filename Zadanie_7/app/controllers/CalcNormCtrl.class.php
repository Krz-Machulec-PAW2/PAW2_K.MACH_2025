<?php

namespace app\controllers;

use app\forms\CalcNormForm;
use app\transfer\CalcNormResult;


class CalcNormCtrl {
    private $form;
    private $wyn;

    public function __construct(){
        $this->form = new CalcNormForm();
        $this->wyn = new CalcNormResult();
    }

    public function getparams(){

        $this->form->kwota = getFromRequest('kwota');
        $this->form->length = getFromRequest('length');
        $this->form->rodzaj = getFromRequest('rodzaj');
    
    }

    public function walidacja(){
        
        if ( ! (isset($this->form->kwota) && isset($this->form->length))) { // sprawdzenie czy zmienne zostały zainicjowane
            return false;
        }
        
        if ( $this->form->kwota == "") {
            getMessages()->addError('Nie podano pierwszej wartości');
        }

        if ( $this->form->length == "") {
            getMessages()->addError('Nie podano drugiej wartości');
        }

        if ( $this->form->rodzaj == ""){
            getMessages()->addError('Nie wybrano operacji');
        }

        
        if (! getMessages()->isError()) { // sprawdzenie czy wprowadzone wartości są dodatnimi wartościami numerycznymi
            
            if (! is_numeric( $this->form->kwota )) {
                getMessages()->addError('Pierwsza wartość jest niepoprawna');
            }

            if (! is_numeric( $this->form->length )) {
                getMessages()->addError('Druga wartość jest niepoprawna');
            }	
        

        
        }
        
        return ! getMessages()->isError();
        }

        public function action_calcNormOblicz(){ 
            $this->getparams();

            if ($this->walidacja()){

            $this->form->kwota = doubleval($this->form->kwota);
	    	$this->form->length = doubleval($this->form->length);
    		$this->form->rodzaj = strval($this->form->rodzaj);
            getMessages()->addInfo('Parametry poprawne');

            if($this->form->rodzaj == 'plus'){$this->wyn->wynik = $this->form->kwota + $this->form->length;}
            if($this->form->rodzaj == 'minus'){$this->wyn->wynik = $this->form->kwota - $this->form->length;}
            if($this->form->rodzaj == 'mnoz'){$this->wyn->wynik = $this->form->kwota * $this->form->length;}
            if($this->form->rodzaj == 'dziel'){$this->wyn->wynik = $this->form->kwota / $this->form->length;}

            getMessages()->addInfo('Wykonano obliczenia');

            }else { $this->wyn->wynik = null;}
            $this->generateView();
    }

    public function action_calcNormShow(){
        getMessages()->addInfo('Witaj w kalkulatorze standardowym');
        $this->generateView();
    }

    public function generateView(){

        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('page_title','Kalkulator standardowy');

        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('wyn',$this->wyn);

        getSmarty()->display('CalcNormView.tpl');
    }

}