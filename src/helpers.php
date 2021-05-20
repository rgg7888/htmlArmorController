<?php

if(!function_exists('notXSS')) {
    function notXSS ($data) {
        return DataController::prevenirXSSAttacks($data);
    }
}