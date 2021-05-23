<?php

namespace App\validacion\forms;

class Valida {

    private array $inputs = [];

    public function correo($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }else{
            return true;
        }
    }

    public function lista($list) {
        if(!\preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$list)) {
            return false;
        }else{
            return true;
        }
    }

    public function letrasOnly($string) {
        if(!\preg_match('/^[a-zA-Z\s]+$/',$string)) {
            return false;
        }else{
            return true;
        }
    }

    public function getValuesPost() {

    }

    public function getValuesGet() {

    }

}