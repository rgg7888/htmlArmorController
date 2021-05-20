<?php

namespace App\data\controller;

class DataController {

    public function __construct(){}

    public static function prevenirXSSAttacks ($data) {
        return \htmlspecialchars($data);
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
                array_push($values,self::prevenirXSSAttacks($_POST[$names[$i]]));
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
                array_push($values,self::prevenirXSSAttacks($_GET[$names[$i]]));
            }
        }
        if(empty($errors)) {
            return $values;
        }else{
            return $errors;
        }
    }

}