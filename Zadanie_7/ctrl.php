<?php

require_once 'init.php';

if(getRouter()->getDefaultRoute() == null){
getRouter()->setDefaultRoute('calcShow');
}
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('personList',		'PersonListCtrl');
getRouter()->addRoute('personNew',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personEdit',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personSave',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personDelete',	'PersonEditCtrl',	['admin']);

getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcOblicz', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcNormShow',    'CalcNormCtrl',  ['user','admin']);
getRouter()->addRoute('calcNormOblicz', 'CalcNormCtrl', ['user', 'admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go();