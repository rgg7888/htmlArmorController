<?php
/*
use PHPUnit\Framework\TestCase;
use App\data\controller\DataController;

class DataControllerTest extends TestCase {

    public function test_xss () {

        $codigo_maligno = '<script>window.location="https://piezas4websites.com"</script>';
        $this->assertEquals("&lt;script&gt;window.location=&quot;https://piezas4websites.com&quot;&lt;/script&gt;",
        DataController::prevenirXSSAttacks($codigo_maligno));

    }

    public function test_validar_campos_vacios() {

        $controlador = new DataController();

        $this->assertEquals(false,$controlador->submited('submit'));

        $array = $controlador->vacio([
            'email',
            'title',
            'ingredients'
        ]);

        $this->assertEquals("email required",$array[0]);

        $this->assertEquals("title required",$array[1]);

        $this->assertEquals("ingredients required",$array[2]);

    }

    public function test_campos_no_vacios() {

        $controlador = new DataController();

        $_POST['submit'] = 'Submit';

        $this->assertEquals(true,$controlador->submited('submit'));   
        
        # form data #
        $_POST['email'] = 'ramiro@correo.com';
        $_POST['title'] = 'supreme pizza';
        $_POST['ingredients'] = 'cheese,onion,tomato';
        ##############################################

        $array = $controlador->vacio([
            'email',
            'title',
            'ingredients'
        ]);

        $this->assertEquals("ramiro@correo.com",$array[0]);

        $this->assertEquals("supreme pizza",$array[1]);

        $this->assertEquals("cheese,onion,tomato",$array[2]);

    }

}*/