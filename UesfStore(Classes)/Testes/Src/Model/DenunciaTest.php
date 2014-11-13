<?php

/**
* Teste Unitário: Denuncia
*/
require_once dirname(__FILE__).'/../../../Src/Model/Denuncia.php';
require_once dirname(__FILE__).'/../../../Src/Model/Anuncio.php';


class DenunciaTest extends PHPUnit_Framework_TestCase {

    protected $denuncia;
    protected $anuncio;
    protected $anuncio1;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->anuncio = new Anuncio("TV de Plasma", "Eletrônicos", "1.100,00", "HHHHSSSS",
            "Televisor semi-novo, 2 meses de uso");
        $this->denuncia = new Denuncia("joao@hotmail.com", "me roubou", $this->anuncio);
        $this->anuncio1 = new Anuncio("PS3", "Eletrônicos", "1.100,00", "HHHHSSSS",
            "PS3 semi-novo, 2 meses de uso");

 }

    /**
     * Teste de unidade que verifica se os atributos de uma Denuncia são atribuidos e
     * modificados corretamente.
     */
    public function testBasic()
    {
        $this->assertEquals("joao@hotmail.com", $this->denuncia->getUsuario());
        $this->assertEquals("me roubou", $this->denuncia->getTexto());
        $this->assertEquals($this->anuncio, $this->denuncia->getAnuncio());

        $this->denuncia->setUsuario("pedro@hotmail.com");
        $this->denuncia->setTexto("Oi");
        $this->denuncia->setAnuncio($this->anuncio1);

        $this->assertEquals("pedro@hotmail.com", $this->denuncia->getUsuario());
        $this->assertEquals("Oi", $this->denuncia->getTexto());
        $this->assertEquals($this->anuncio1, $this->denuncia->getAnuncio());
    }

}
?>