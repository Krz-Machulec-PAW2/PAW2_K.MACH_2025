<?php

require_once 'init.php';
$conf->action_root = $conf->app_root.'/ctrl_norm.php?action=';

switch($action){
    default : 
        $ctrl = new app\controllers\CalcNormCtrl();
        $ctrl->generateView();
        break;
    case 'calcNormCompute' : 
        $ctrl = new app\controllers\CalcNormCtrl();
        $ctrl->oblicz();
        break;

    }