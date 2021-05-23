<?php
/*
use PHPUnit\Framework\TestCase;
use App\validacion\forms\Valida;

class ValidaTest extends TestCase {

    public function test_default() {

        $helloWorld = new Valida;

        $this->assertEquals("Porfavor valide sus inputs THANKS =)", $helloWorld->validar());

    }

    public function test_validar_campo_vacio(){

        $input = new Valida;

        $_POST['email'] = '';

        $this->assertEquals("email es Obligatorio", $input->validar("vacio","email"));

        $_POST['email'] = 'ramiro@email.com';

        $this->assertEquals("ramiro@email.com", $input->validar("vacio","email"));

    }

    public function test_validar_campo_vacio_get_method(){

        $input = new Valida;

        $_GET['email'] = '';

        $this->assertEquals("email es Obligatorio", $input->validar("vacio","email",true));

        $_GET['email'] = 'ramiro@email.com';

        $this->assertEquals("ramiro@email.com", $input->validar("vacio","email",true));

    }

    public function test_validar_email(){

        $email = new Valida;

        $_POST['myEmail'] = '';

        $this->assertEquals("Correo Invalido", $email->validar("correo","myEmail"));

        $_POST['myEmail'] = 'ramiro@email.com';

        $this->assertEquals("ramiro@email.com", $email->validar("correo","myEmail"));

    }

    public function test_validar_email_get_method(){

        $email = new Valida;

        $_GET['myEmail'] = '';

        $this->assertEquals("Correo Invalido", $email->validar("correo","myEmail",true));

        $_GET['myEmail'] = 'ramiro@email.com';

        $this->assertEquals("ramiro@email.com", $email->validar("correo","myEmail",true));

    }

    public function test_lista_string_dividido_por_comas() {

        $listaDeIngredientes = new Valida;

        $_POST['ingredients'] = 'ingrediente1 ingrediente2 ingrediente3';

        $this->assertEquals("Formato Incorrecto",$listaDeIngredientes->validar("lista","ingredients"));

        $_POST['ingredients'] = 'ingrediente1,ingrediente2,ingrediente3';

        $this->assertEquals("Formato Incorrecto",$listaDeIngredientes->validar("lista","ingredients"));

        $_POST['ingredients'] = 'ingrediente,ingrediente,ingrediente';

        $this->assertEquals("ingrediente,ingrediente,ingrediente",$listaDeIngredientes->validar("lista","ingredients"));

    }

    public function test_lista_string_dividido_por_comas_get_method() {

        $listaDeIngredientes = new Valida;

        $_GET['ingredients'] = 'ingrediente1 ingrediente2 ingrediente3';

        $this->assertEquals("Formato Incorrecto",$listaDeIngredientes->validar("lista","ingredients",true));

        $_GET['ingredients'] = 'ingrediente1,ingrediente2,ingrediente3';

        $this->assertEquals("Formato Incorrecto",$listaDeIngredientes->validar("lista","ingredients",true));

        $_GET['ingredients'] = 'ingrediente,ingrediente,ingrediente';

        $this->assertEquals("ingrediente,ingrediente,ingrediente",$listaDeIngredientes->validar("lista","ingredients",true));

    }

    public function test_validar_letras_only(){

        $texto = new Valida;

        $_POST['title'] = '';

        $this->assertEquals("Solo se permiten letras y espacios", $texto->validar("letrasOnly","title"));

        $_POST['title'] = 'MyTitle';

        $this->assertEquals("MyTitle", $texto->validar("letrasOnly","title"));

    }

    public function test_validar_letras_only_get(){

        $texto = new Valida;

        $_GET['title'] = '';

        $this->assertEquals("Solo se permiten letras y espacios", $texto->validar("letrasOnly","title",true));

        $_GET['title'] = 'MyTitle';

        $this->assertEquals("MyTitle", $texto->validar("letrasOnly","title",true));

    }

}*/