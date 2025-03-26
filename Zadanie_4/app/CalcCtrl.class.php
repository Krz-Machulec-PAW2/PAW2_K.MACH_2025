<?php

require_once $conf->root_path.'/libs/smarty/lib/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $messages;
    private $form;
    private $rata_mies;

    public function __construct(){
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->rata_mies = new CalcResult();
    }

    public function getparams(){

    $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$this->form->length = isset($_REQUEST['length']) ? $_REQUEST['length'] : null;
	$this->form->stopa = isset($_REQUEST['stopa']) ? $_REQUEST['stopa'] : null;
    
    }

    public function walidacja(){
        
        if ( ! (isset($this->form->kwota) && isset($this->form->length) && isset($this->form->stopa))) { // sprawdzenie czy zmienne zostały zainicjowane
            return false;
        }
        
        if ( $this->form->kwota == "") {
            $this->messages->addError('Nie podano kwoty kredytu');
        }
        if ( $this->form->length == "") {
            $this->messages->addError('Nie podano długości trwania kredytu');
        }
        
        if ( $this->form->stopa == "") {
            $this->messages->addError('Nie podano stopy procentowej kredytu');
        }
        
        if (! $this->messages->isError()) { // sprawdzenie czy wprowadzone wartości są dodatnimi wartościami numerycznymi
            
            if (! is_numeric( $this->form->kwota )) {
                $this->messages->addError('Podana wartość kwoty kredytu jest niepoprawna');
            }
            if ($this->form->kwota < 0){
                $this->messages->addError('Kwota kredytu nie może być ujemna');
            }
            if (! is_numeric( $this->form->length )) {
                $this->messages->addError('Druga wartość nie jest liczbą całkowitą');
            }	
        
            if ($this->form->length < 0) {
                $this->messages->addError('Nie można wziąść kredytu na ujemną liczbę lat');
            }
        
            if (! is_numeric( $this->form->stopa )) {
                $this->messages->addError('Podana wartość stopy procentowej kredytu jest niepoprawna');
            }
        
            if($this->form->stopa < 0) {
                $this->messages->addError('Stopa procentowa kredytu nie może być ujemna');
            }
        
        }
        
        return ! $this->messages->isError();
        }

        public function oblicz(){ 
            $this->getparams();
    
            if ($this->walidacja()){

            $this->form->kwota = doubleval($this->form->kwota);
	    	$this->form->length = intval($this->form->length);
    		$this->form->stopa = doubleval($this->form->stopa);
            $this->messages->addInfo('Parametry poprawne');

            $this->rata_mies = ($this->form->kwota / (12 * $this->form->length)) + ($this->form->kwota * ($this->form->stopa / 100 * $this->form->length)) / (12 * $this->form->length);
		    $this->rata_mies = number_format((double)$this->rata_mies, 2, '.', '');

            $this->messages->addInfo('Wykonano obliczenia');

            }
            else { $this->rata_mies = null; }
            $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty\Smarty();

        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Kalkulator kredytowy');

        $smarty->assign('kwota',$this->form->kwota);
        $smarty->assign('length',$this->form->length);
        $smarty->assign('stopa',$this->form->stopa);
        $smarty->assign('rata_mies',$this->rata_mies);
        $smarty->assign('messages',$this->messages);

        $smarty->display($conf->root_path.'/app/CalcView.html');
    }

}

class CalcNormCtrl {
    private $messages;
    private $form;
    private $wynik;

    public function __construct(){
        $this->messages = new Messages();
        $this->form = new CalcNormForm();
        $this->rata_mies = new CalcNormResult();
    }

    public function getparams(){

    $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$this->form->length = isset($_REQUEST['length']) ? $_REQUEST['length'] : null;
	$this->form->rodzaj = isset($_REQUEST['rodzaj']) ? $_REQUEST['rodzaj'] : null;
    
    }

    public function walidacja(){
        
        if ( ! (isset($this->form->kwota) && isset($this->form->length))) { // sprawdzenie czy zmienne zostały zainicjowane
            return false;
        }
        
        if ( $this->form->kwota == "") {
            $this->messages->addError('Nie podano pierwszej wartości');
        }

        if ( $this->form->length == "") {
            $this->messages->addError('Nie podano drugiej wartości');
        }

        
        if (! $this->messages->isError()) { // sprawdzenie czy wprowadzone wartości są dodatnimi wartościami numerycznymi
            
            if (! is_numeric( $this->form->kwota )) {
                $this->messages->addError('Pierwsza wartość jest niepoprawna');
            }

            if (! is_numeric( $this->form->length )) {
                $this->messages->addError('Druga wartość jest niepoprawna');
            }	
        

        
        }
        
        return ! $this->messages->isError();
        }

        public function oblicz(){ 
            $this->getparams();
    
            if ($this->walidacja()){

            $this->form->kwota = doubleval($this->form->kwota);
	    	$this->form->length = doubleval($this->form->length);
    		$this->form->rodzaj = strval($this->form->rodzaj);
            $this->messages->addInfo('Parametry poprawne');

            if($this->form->rodzaj == 'plus'){$this->wynik = $this->form->kwota + $this->form->length;}
            if($this->form->rodzaj == 'minus'){$this->wynik = $this->form->kwota - $this->form->length;}
            if($this->form->rodzaj == 'mnoz'){$this->wynik = $this->form->kwota * $this->form->length;}
            if($this->form->rodzaj == 'dziel'){$this->wynik = $this->form->kwota / $this->form->length;}

            $this->messages->addInfo('Wykonano obliczenia');

            }else { $this->wynik = null;
                   $this->form->rodzaj = null; }
            $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty\Smarty();

        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Kalkulator kredytowy');

        $smarty->assign('kwota',$this->form->kwota);
        $smarty->assign('length',$this->form->length);
        $smarty->assign('rodzaj',$this->form->rodzaj);
        $smarty->assign('wynik',$this->wynik);
        $smarty->assign('messages',$this->messages);

        $smarty->display($conf->root_path.'/app/CalcNormView.html');
    }

}