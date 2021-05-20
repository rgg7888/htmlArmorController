<?php

use PHPUnit\Framework\TestCase;
use App\data\controller\DataController;

class DataControllerTest extends TestCase {

    public function test_xss () {

        $codigo_maligno = '<script>window.location="https://piezas4websites.com"</script>';
        $this->assertEquals("&lt;script&gt;window.location=&quot;https://piezas4websites.com&quot;&lt;/script&gt;",
        DataController::prevenirXSSAttacks($codigo_maligno));

    }

}