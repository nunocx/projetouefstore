<?php

/**
* TC02-Busca de anúncio
*/
require_once dirname(__FILE__).'/../../PBLTestes/Anuncio.php';
require_once dirname(__FILE__).'/../../PBLTestes/Controller.php';
require_once dirname(__FILE__).'/../../PBLTestes/Produto.php';
require_once dirname(__FILE__).'/../../PBLTestes/CampoPreenchidoErradoException.php';
class BuscaDeAnuncioTest extends PHPUnit_Framework_TestCase 
{

    protected $controller;
    protected $celularLG;
    protected $anuncio;
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() 
    {
        $this->controller = new Controller();
        $this->celularLG = $this->controller->cadastrarProduto("Celular LG", "Celulares e telefone", "299,99", 
                "HDHDUSHSUDHSUF", "Em bom estado", "1");
    }
    /**
     * CW1-Busca de anúncio:
     * Testa a busca de um anúncio com todos os dados.
     */
    public function testeBuscaBemSucedida()
    {
        
        $this->anuncio = $this->controller->buscarAnuncio("Celular LG", "Usado","Celulares e telefone");
        $this->assertEquals("Celular LG",$this->anuncio->getTitulo());
        $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
        $this->assertEquals("299,99", $this->anuncio->getPreco());
        $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
        $this->assertEquals("Usado", $this->anuncio->getDescricao());
        $this->assertEquals("1", $this->anuncio->getQuantidade());
    }
    
    /**
     * CW2-Busca por nome:
     * Testa a busca de um anúncio apenas pelo nome.
     */
    public function testeBuscaPorNome()
    {
        
        $this->anuncio = $this->controller->buscarAnuncio("Celular LG", "","");
        $this->assertEquals("Celular LG",$this->anuncio->getTitulo());
        $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
        $this->assertEquals("299,99", $this->anuncio->getPreco());
        $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
        $this->assertEquals("Usado", $this->anuncio->getDescricao());
        $this->assertEquals("1", $this->anuncio->getQuantidade());
    }
    
    /**
     * CW3-Busca por característica:
     * Testa a busca de um anúncio pela descrição.
     */
    public function testeBuscaPorCaracteristica()
    {
        
        $this->anuncio = $this->controller->buscarAnuncio("", "Usado","");
        $this->assertEquals("Celular LG",$this->anuncio->getTitulo());
        $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
        $this->assertEquals("299,99", $this->anuncio->getPreco());
        $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
        $this->assertEquals("Usado", $this->anuncio->getDescricao());
        $this->assertEquals("1", $this->anuncio->getQuantidade());
    }
    
    /**
     * CW4-Busca por categoria:
     * Testa a busca de um anúncio por categoria.
     */
    public function testeBuscaPorCategoria()
    {
        
        $this->anuncio = $this->controller->buscarAnuncio("", "","Celulares e telefone");
        $this->assertEquals("Celular LG",$this->anuncio->getTitulo());
        $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
        $this->assertEquals("299,99", $this->anuncio->getPreco());
        $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
        $this->assertEquals("Usado", $this->anuncio->getDescricao());
        $this->assertEquals("1", $this->anuncio->getQuantidade());
    }
    
    /**
     * CW5-Falta de informação para a busca:
     * Testa a busca de um anúncio com todos os campos em branco.
     * @expectedException CamposPreenchidosErrados
     */
    public function testeBuscaSemInformação()
    {        
        $this->anuncio = $this->controller->buscarAnuncio("", "","");
    }
}
