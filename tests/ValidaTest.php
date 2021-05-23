<?php

use PHPUnit\Framework\TestCase;
use App\validacion\forms\Valida;

class ValidaTest extends TestCase {

    public function test_validar_formulario_campos_vacios(){

        $datos = new Valida([
            ['name' => "email"],
            ["name" => "title"],
            ["name" => "ingredients"]
        ]);

        $this->assertEquals("email obligatoriotitle obligatorioingredients obligatorio", $datos->validar());

    }

}