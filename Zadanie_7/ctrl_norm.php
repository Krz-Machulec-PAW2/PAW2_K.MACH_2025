<?php

require_once 'init.php';

getRouter()->setDefaultRoute('calcNormShow');
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('calcNormShow',    'CalcNormCtrl',  ['user','admin']);

getRouter()->go();