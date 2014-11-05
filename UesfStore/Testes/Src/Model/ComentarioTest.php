<?php

/**
* Teste Unitário: Comentario
*/
require_once dirname(__FILE__).'/../../../Src/Model/Comentario.php';
require_once dirname(__FILE__).'/../../../Src/Model/Anuncio.php';

class ComentarioTest extends PHPUnit_Framework_TestCase {

    protected $comentario;
    
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() 
    {
        $this->comentario = new Comentario("joao@hotmail.com", $this->anuncio , "que porcaria", "10-10-10");
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