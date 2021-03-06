<?php

namespace App\validacion\forms;

class Valida {

    public function __construct() {}

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

    public function letrasOnlyNotSpaces($string) {
        if(!\preg_match('/^[a-zA-Z]+$/',$string)) {
            return false;
        }else{
            return true;
        }
    }

    public function vacio($campo) {
        if(empty($campo)) {
            return false;
        }else{
            return true;
        }
    }

    public function validar(string $tipo = "none",string $name = "none",bool $getMethod = false) {
        switch($tipo) {
            case "correo":
                if(!$getMethod) {
                    if($this->correo($_POST[$name])) {
                        return \htmlspecialchars($_POST[$name]);
                    }else{
                        return ["err","Correo Invalido"];
                    }
                }else{
                    if($this->correo($_GET[$name])) {
                        return \htmlspecialchars($_GET[$name]);
                    }else{
                        return ["err","Correo Invalido"];
                    }
                }
            break;
            case "lista":
                if(!$getMethod) {
                    if($this->lista($_POST[$name])) {
                        return \htmlspecialchars($_POST[$name]);
                    }else{
                        return ["err","Formato Incorrecto"];
                    }
                }else{
                    if($this->lista($_GET[$name])) {
                        return \htmlspecialchars($_GET[$name]);
                    }else{
                        return ["err","Formato Incorrecto"];
                    }
                }
            break;
            case "letrasOnly":
                if(!$getMethod) {
                    if($this->letrasOnly($_POST[$name])) {
                        return \htmlspecialchars($_POST[$name]);
                    }else{
                        return ["err","Solo se permiten letras y espacios"];
                    }
                }else{
                    if($this->letrasOnly($_GET[$name])) {
                        return \htmlspecialchars($_GET[$name]);
                    }else{
                        return ["err","Solo se permiten letras y espacios"];
                    }
                }
            break;
            case "vacio":
                if(!$getMethod) {
                    if($this->vacio($_POST[$name])) {
                        return \htmlspecialchars($_POST[$name]);
                    }else{
                        return ["err",$name." es Obligatorio"];
                    }
                }else{
                    if($this->vacio($_GET[$name])) {
                        return \htmlspecialchars($_GET[$name]);
                    }else{
                        return ["err",$name." es Obligatorio"];
                    }
                }
            break;
            default: return "Porfavor valide sus inputs THANKS =)";

        }
    }

}