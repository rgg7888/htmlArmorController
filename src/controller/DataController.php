<?php

namespace App\data\controller;

class DataController {

    public function __construct(){}

    public static function prevenirXSSAttacks ($data) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        return \htmlspecialchars($data);
    }

    public function validEmail($email) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "not valid";
        }else{
            return $email;
        }
    }

    public function validList($list) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if(!\preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$list)) {
            return "not valid";
        }else{
            return $list;
        }
    }

    public function letrasOnly($string) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if(!\preg_match('/^[a-zA-Z\s]+$/',$string)) {
            return "not valid";
        }else{
            return $string;
        }
    }

    public function submited (string $buttonName) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if(isset($_POST[$buttonName])) {
            return true;
        }else{
            return false;
        }
    }

    public function vacio(array $names) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
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
            return [$errors,$values];
        }
    }

    public function _submited (string $buttonName) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if(isset($_GET[$buttonName])) {
            return true;
        }else{
            return false;
        }
    }

    public function _vacio(array $names) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
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
            return [$values,$errors];
        }
    }

    public function recorrerResult (array $result, $imprimir = false) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        $values = [];
        if($imprimir){
            for($i = 0; $i < count($result); $i++) {
                if(is_array($result[$i])) {
                    for($j = 0; $j < count($result[$i]); $j++) {
                        echo $result[$i][$j] . "<br>";
                    }
                }else{
                    echo $result[$i] . "<br>";
                }
            }
        }else{
            for($i = 0; $i < count($result); $i++) {
                if(is_array($result[$i])) {
                    for($j = 0; $j < count($result[$i]); $j++) {
                        array_push($values,$result[$i][$j]);
                    }
                }else{
                    array_push($values,$result[$i]);
                }
            }
            return $values;
        }
    }

    public static function showOrNotErrors ($inputName,$text) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if($text === $inputName." required" || $text === "not valid") {
            return $text;
        }
    }

    public static function showOrNotValues ($inputName,$text) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        if($text !== $inputName." required" && $text !== "not valid") {
            return $text;
        }
    }

    public function itera($array) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        $invertido = [];
        for($i = count($array); $i > 0; $i--){
            array_push($invertido,$array[$i-1]);
        }
        return $invertido;
    }

    public function OrdenamientoEspecial (array $valores) {
        trigger_error("Esta funcion y la clase ala que pertenece desaparecera pronto , no la utilice please", E_USER_NOTICE);
        $invertido = [];
        if(filter_var($valores[2], FILTER_VALIDATE_EMAIL)) {
            $invertido = $this->itera($valores);
            $aux = $invertido[1];
            $invertido[1] = $invertido[2];
            $invertido[2] = $aux;
            return $invertido;
        }else{
            return $valores;
        }
    }

}