<?php

namespace app\controllers;

use app\forms\PersonSearchForm;
use PDOException;

class PersonListCtrl {

	private $form; 
	private $records; 

	public function __construct(){
		$this->form = new PersonSearchForm();
	}
		
	public function walidacja() {
		$this->form->surname = getFromRequest('SearchSurname');
		
		return ! getMessages()->isError();
	}
	
	public function action_personList(){
		$this->walidacja();
		
		$search_params = []; 
		if ( isset($this->form->surname) && strlen($this->form->surname) > 0) {
			$search_params['Nazwisko[~]'] = $this->form->surname.'%'; 
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		$where ["ORDER"] = "Nazwisko";
		
		try{
			$this->records = getDB()->select("users", [
					"ID_Users",
					"Imie",
					"Nazwisko",
					"Data-Urodzenia",
                    "E-Mail",
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		
		
		getSmarty()->assign('searchForm',$this->form); 
		getSmarty()->assign('people',$this->records);  
		getSmarty()->display('PersonList.tpl');
	}
	
}
