<?php

namespace App\clad\crud;

use App\validacion\forms\Valida;

class Clad {

    private array $data = [
        'machine' => '',
        'user' => '',
        'password' => '',
        'dbname' => '',
        'conexion' => null
    ];

    public function setConn($conn) {
        $this->data['conexion'] = $conn;
    }

    public function getConn() {
        return $this->data['conexion'];
    }

    public function connect() {
        $conn = \mysqli_connect($this->getHost(),$this->getUser(),$this->getPassword(),$this->getDbName());
        $this->setConn($conn);
    }

    public function __construct(array $data = [
        'machine' => '',
        'user' => '',
        'password' => '',
        'dbname' => '',
        'conexion' => null,
        'order' => null
    ]){

        $this->data['machine'] = $data['machine'];
        $this->data['user'] = $data['user'];
        $this->data['password'] = $data['password'];
        $this->data['dbname'] = $data['dbname'];
        $this->connect();

    }

    public function setOrden(string $orderBy) {
        $this->data['order'] = $orderBy;
    }

    public function getOrder() {
        return $this->data['order'];
    }

    public function setHost(string $hostName) {
        $this->data['machine'] = $hostName;
    }

    public function getHost() {
        return $this->data['machine'];
    }

    public function setUser(string $user) {
        $this->data['user'] = $user;
    }

    public function getUser() {
        return $this->data['user'];
    }

    public function setPassword(string $password) {
        $this->data['password'] = $password;
    }

    public function getPassword() {
        return $this->data['password'];
    }

    public function setDbName(string $dbname) {
        $this->data['dbname'] = $dbname;
    }

    public function getDbName() {
        return $this->data['dbname'];
    }

    //crud operations
    public function select(string $campos,string $tabla,$conn,$order = null) {
        $this->setOrden($order);
        $objeto = new Valida;
        #primero valido que sea una lista de campos valida
        if($objeto->lista($campos)) {
            #valido que el nombre sea un string correcto
            if($objeto->letrasOnlyNotSpaces($tabla)) {
                #valido si el usuario quiere un ordenamiento 
                if($this->getOrder()) {
                    $sql = "SELECT $campos FROM $tabla ORDER BY ".$this->getOrder();
                    echo "entro al ordenamiento";
                }else{
                    $sql = "SELECT $campos FROM $tabla";
                    echo "no entro al ordenamiento";
                }
                $registros = \mysqli_query($conn,$sql);
                $rows = \mysqli_fetch_all($registros,MYSQLI_ASSOC);
                \mysqli_free_result($registros);
                \mysqli_close($conn);
                return $rows;
            }else{
                die("error al crear el query");
            }
        }else{
            die("error al crear el query");
        }
    }

}