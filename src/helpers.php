<?php
//Funciones Obsoletas , no las eliminare para el Recuerdo
#Advertencia no utilice la clase DataController y ninguno de sus metodos
########################This is a close class, don't use it please
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
#################################

if(!function_exists('validar')) {
    function validar(string $tipo = "none",string $name = "none",bool $getMethod = false) {
        $helloWorld = new App\validacion\forms\Valida;
        return $helloWorld->validar($tipo,$name,$getMethod);
    }
}

if(!function_exists('conectar')) {
    function conectar(array $data) {
        $helloWorld = new App\clad\crud\Clad($data);
        return $helloWorld->getConn();
    }
}

if(!function_exists('select')) {
    function select(string $campos,string $tabla,$conn,array $order = [
        'by' => 'none',
        'forma' => 'ASC'
    ]) {
        $helloWorld = new App\clad\crud\Clad;
        return $helloWorld->select($campos,$tabla,$conn,$order);
    }
}

if(!function_exists('byId')) {
    function byId ($conn,string $tabla) {
        $helloWorld = new App\clad\crud\Clad;
        return $helloWorld->byId($conn,$tabla);
    }
}

if(!function_exists('insert')) {
    function insert(array $data,string $tabla,$conn,string $goTo) {
        $helloWorld = new App\clad\crud\Clad;
        return $helloWorld->insert($data,$tabla,$conn,$goTo);
    }
}

if(!function_exists('delete')) {
    function delete($conn,string $name,string $tabla) {
        $helloWorld = new App\clad\crud\Clad;
        $helloWorld->delete($conn,$name,$tabla);
    }
}