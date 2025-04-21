<?php

require_once 'init.php';

getRouter()->setDefaultRoute('personList');
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('personList',		'PersonListCtrl');

getRouter()->go();