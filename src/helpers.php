<?php

if(!function_exists('notXSS')) {
    function notXSS ($data) {
        return App\data\controller\DataController::prevenirXSSAttacks($data);
    }
}

if(!function_exists('err')) {
    function err($inputName,$output) {
        return App\data\controller\DataController::showOrNotErrors($inputName,$output);
    }
}

if(!function_exists('val')) {
    function val($inputName,$output) {
        return App\data\controller\DataController::showOrNotValues($inputName,$output);
    }
}

if(!function_exists('validar_form')) {
    function validar_form(array $names, $buttonName = 'submit', $imprimir = false) {
        $objeto = new App\data\controller\DataController;
        if($objeto->submited($buttonName)) {
            return $objeto->OrdenamientoEspecial($objeto->recorrerResult($objeto->vacio($names),$imprimir));
        }
    }
}

if(!function_exists('_validar_form')) {
    function _validar_form(array $names, $buttonName = 'submit', $imprimir = false) {
        $objeto = new App\data\controller\DataController;
        if($objeto->_submited($buttonName)) {
            return $objeto->OrdenamientoEspecial($objeto->recorrerResult($objeto->_vacio($names),$imprimir));
        }
    }
}