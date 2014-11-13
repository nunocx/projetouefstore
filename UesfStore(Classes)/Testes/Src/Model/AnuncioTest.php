<?php

/**
* Teste Unitário: Anuncio
*/
require_once dirname(__FILE__).'/../../../Src/Model/Anuncio.php';


class AnuncioTest extends PHPUnit_Framework_TestCase {

    protected $anuncio;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() 
    {
        $this->anuncio = new Anuncio("TV de Plasma", "Eletrônicos", "1.100,00", "HHHHSSSS","Televisor semi-novo, 2 meses de uso");
    }

    /**
     * Teste de unidade que verifica se os atributos de um Anuncio são atribuidos e
     * modificados corretamente.
     */
    public function testBasic()
    {
        $this->assertEquals("TV de Plasma", $this->anuncio->getTitulo());
        $this->assertEquals("Eletrônicos", $this->anuncio->getCategoria());
        $this->assertEquals("1.100,00", $this->anuncio->getPreco());
        $this->assertEquals("HHHHSSSS", $this->anuncio->getfotoVideo());
        $this->assertEquals("Televisor semi-novo, 2 meses de uso", $this->anuncio->getDescricao());

        $this->anuncio->setTitulo("TV de LED FullHD");
        $this->anuncio->setCategoria("Televisores");
        $this->anuncio->setPreco("2.000,00");
        $this->anuncio->setfotoVideo("SSSSHHHH");
        $this->anuncio->setDescricao("Televisor Novo, Com Nota Fiscal");

        $this->assertEquals("TV de LED FullHD", $this->anuncio->getTitulo());
        $this->assertEquals("Televisores", $this->anuncio->getCategoria());
        $this->assertEquals("2.000,00", $this->anuncio->getPreco());
        $this->assertEquals("SSSSHHHH", $this->anuncio->getfotoVideo());
        $this->assertEquals("Televisor Novo, Com Nota Fiscal", $this->anuncio->getDescricao());
    }

}