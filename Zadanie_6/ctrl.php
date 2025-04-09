<?php

require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcOblicz', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcNormShow',    'CalcNormCtrl',  ['user','admin']);
getRouter()->addRoute('calcNormOblicz', 'CalcNormCtrl', ['user', 'admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go();