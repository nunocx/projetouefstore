<?php

/**
* Teste Unitário: Comentario
*/
require_once dirname(__FILE__).'/../../../Src/Model/Comentario.php';
require_once dirname(__FILE__).'/../../../Src/Model/Anuncio.php';

class ComentarioTest extends PHPUnit_Framework_TestCase {

    protected $comentario;
    protected $anuncio;
    protected $anuncio1;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->anuncio = new Anuncio("TV de Plasma", "Eletrônicos", "1.100,00", "HHHHSSSS",
            "Televisor semi-novo, 2 meses de uso");
        $this->comentario = new Comentario("joao@hotmail.com", $this->anuncio , "que porcaria", "10-10-10");
        $this->anuncio1 = new Anuncio("PS3", "Eletrônicos", "1.100,00", "HHHHSSSS",
            "PS3 novo, 1 mês de uso");
 }

    /**
     * Teste de unidade que verifica se os atributos de um Comentario são atribuidos e
     * modificados corretamente.
     */
    public function testBasic()
    {
        $this->assertEquals("joao@hotmail.com", $this->comentario->getComentarista());
        $this->assertSame($this->anuncio , $this->comentario->getAnuncio());
        $this->assertEquals("que porcaria", $this->comentario->getTexto());

        $this->comentario->setComentarista("pedro@hotmail.com");
        $this->comentario->setAnuncio($this->anuncio1);
        $this->comentario->setTexto("que bom");

        $this->assertEquals("pedro@hotmail.com", $this->comentario->getComentarista());
        $this->assertEquals($this->anuncio1, $this->comentario->getAnuncio());
        $this->assertEquals("que bom", $this->comentario->getTexto());
        }

}