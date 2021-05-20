<?php

namespace App\data\controller;

class DataController {

    public function __construct(){}

    public static function prevenirXSSAttacks ($data) {
        return \htmlspecialchars($data);
    }

    public function validEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "not valid";
        }else{
            return $email;
        }
    }

    public function validList($list) {
        if(!\preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$list)) {
            return "not valid";
        }else{
            return $list;
        }
    }

    public function letrasOnly($string) {
        if(!\preg_match('/^[a-zA-Z\s]+$/',$string)) {
            return "not valid";
        }else{
            return $string;
        }
    }

    public function submited (string $buttonName) {
        if(isset($_POST[$buttonName])) {
            return true;
        }else{
            return false;
        }
    }

    public function vacio(array $names) {
        $errors = [];
        $values = [];
        for($i = 0; $i < count($names); $i++){
            if(empty($_POST[$names[$i]])) {
                array_push($errors,$names[$i].' required');
            }else{
                if($names[$i] === 'email') {
                    if($this->validEmail(self::prevenirXSSAttacks($_POST[$names[$i]])) === 'not valid') {
                        array_push($errors,$this->validEmail(self::prevenirXSSAttacks($_POST[$names[$i]])));
                    }else{
                        array_push($values,$this->validEmail(self::prevenirXSSAttacks($_POST[$names[$i]])));
                    }
                }else if($names[$i] === 'ingredients' || $names[$i] === 'list' || $names[$i] === 'lista') {
                    if($this->validEmail(self::prevenirXSSAttacks($_POST[$names[$i]])) === 'not valid') {
                        array_push($errors,$this->validList(self::prevenirXSSAttacks($_POST[$names[$i]])));
                    }else{
                        array_push($values,$this->validList(self::prevenirXSSAttacks($_POST[$names[$i]])));
                    }
                }else{
                    if($this->validEmail(self::prevenirXSSAttacks($_POST[$names[$i]])) === 'not valid') {
                        array_push($errors,$this->letrasOnly(self::prevenirXSSAttacks($_POST[$names[$i]])));
                    }else{
                        array_push($values,$this->letrasOnly(self::prevenirXSSAttacks($_POST[$names[$i]])));
                    }
                }
            }
        }
        if(empty($errors)) {
            return $values;
        }else{
            return $errors;
        }
    }

    public function _submited (string $buttonName) {
        if(isset($_GET[$buttonName])) {
            return true;
        }else{
            return false;
        }
    }

    public function _vacio(array $names) {
        $errors = [];
        $values = [];
        for($i = 0; $i < count($names); $i++){
            if(empty($_GET[$names[$i]])) {
                array_push($errors,$names[$i].' required');
            }else{
                if($names[$i] === 'email') {
                    if($this->validEmail(self::prevenirXSSAttacks($_GET[$names[$i]])) === 'not valid') {
                        array_push($errors,$this->validEmail(self::prevenirXSSAttacks($_GET[$names[$i]])));
                    }else{
                        array_push($values,$this->validEmail(self::prevenirXSSAttacks($_GET[$names[$i]])));
                    }
                }else if($names[$i] === 'ingredients' || $names[$i] === 'list' || $names[$i] === 'lista') {
                    if($this->validEmail(self::prevenirXSSAttacks($_GET[$names[$i]])) === 'not valid') {
                        array_push($errors,$this->validList(self::prevenirXSSAttacks($_GET[$names[$i]])));
                    }else{
                        array_push($values,$this->validList(self::prevenirXSSAttacks($_GET[$names[$i]])));
                    }
                }else{
                    if($this->validEmail(self::prevenirXSSAttacks($_GET[$names[$i]])) === 'not valid') {
                        array_push($errors,$this->letrasOnly(self::prevenirXSSAttacks($_GET[$names[$i]])));
                    }else{
                        array_push($values,$this->letrasOnly(self::prevenirXSSAttacks($_GET[$names[$i]])));
                    }
                }
            }
        }
        if(empty($errors)) {
            return $values;
        }else{
            return $errors;
        }
    }

}