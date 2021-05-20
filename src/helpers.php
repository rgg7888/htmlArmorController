<?php

if(!function_exists('notXSS')) {
    function notXSS ($data) {
        return DataController::prevenirXSSAttacks($data);
    }
}

if(!function_exists('validar_form')) {
    function validar_form(array $names, $buttonName = 'submit') {
        $objeto = new DataController;
        if($objeto->submited($buttonName)) {
            return $objeto->vacio($names);
        }
    }
}