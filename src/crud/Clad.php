<?php

namespace App\clad\crud;

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

    public function __construct(array $data){

        $this->data['machine'] = $data['machine'];
        $this->data['user'] = $data['user'];
        $this->data['password'] = $data['password'];
        $this->data['dbname'] = $data['dbname'];
        $this->connect();

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

}