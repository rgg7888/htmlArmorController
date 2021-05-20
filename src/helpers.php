<?php

if(!function_exists('notXSS')) {
    function notXSS ($data) {
        return App\data\controller\DataController::prevenirXSSAttacks($data);
    }
}

if(!function_exists('validar_form')) {
    function validar_form(array $names, $buttonName = 'submit') {
        $objeto = new App\data\controller\DataController;
        if($objeto->submited($buttonName)) {
            return $objeto->vacio($names);
        }
    }
}

if(!function_exists('_validar_form')) {
    function _validar_form(array $names, $buttonName = 'submit') {
        $objeto = new App\data\controller\DataController;
        if($objeto->_submited($buttonName)) {
            return $objeto->_vacio($names);
        }
    }
}