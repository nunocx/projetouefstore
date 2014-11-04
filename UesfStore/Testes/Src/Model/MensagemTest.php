<?php

/**
* Teste Unitário: Mensagem
*/
require_once dirname(__FILE__).'/../../../Src/Model/Mensagem.php';


class MensagemTest extends PHPUnit_Framework_TestCase {

    protected $mensagem;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->mensagem = new Mensagem("TV de Plasma", "joao@hotmail.com", "E ai", "10-10-10");
 }

    /**
     * Teste de unidade que verifica se os atributos de uma Mensagem são atribuidos e
     * modificados corretamente.
     */
    public function testBasic()
    {
        $this->assertEquals("TV de Plasma", $this->mensagem->getTitulo());
        $this->assertEquals("joao@hotmail.com", $this->mensagem->getDestinatario());
        $this->assertEquals("E ai", $this->mensagem->getTexto());

        $this->mensagem->setTitulo("TV Plasma");
        $this->mensagem->setDestinatario("pedro@hotmail.com");
        $this->mensagem->setTexto("Oi");

        $this->assertEquals("TV Plasma", $this->mensagem->getTitulo());
        $this->assertEquals("pedro@hotmail.com", $this->mensagem->getDestinatario());
        $this->assertEquals("Oi", $this->mensagem->getTexto());
    }

}
?>