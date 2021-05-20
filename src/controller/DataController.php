<?php

namespace App\data\controller;

class DataController {

    public static function prevenirXSSAttacks ($data) {
        return \htmlspecialchars($data);
    }

}