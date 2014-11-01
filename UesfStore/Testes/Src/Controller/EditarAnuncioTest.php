<?php

/**
* TC12 - Editar Anuncio
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Model/Produto.php';
require_once dirname(__FILE__).'/../../../Src/Model/Servico.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';

class EditarAnuncioTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $produto;
    protected $servico;
    protected $id;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
        $this->produto = $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "HHHHSSSS", "1");
        $this->id = "1";

    }

    /**
     * SC1 - Edição de anuncio de produto bem-sucedida:
     * Testa a edição de um anuncio de produto no caso ideal.
     */
    public function testEditarAnuncioBemSucedido()
    {

        $anuncio = $this->controller->buscarAnuncio($this->id);
        $titulo = $this->usuario->getTitulo();
        $categoria = $this->usuario->getCategoria();
        $descricao = $this->usuario->getDescricao();
        $preco = $this->usuario->getPreco();

        $this->controller->EditarAnuncio($this->$id, "TV de LED FullHD", "Televisores",
                "Televisor Novo, Com Nota Fiscal", "2.000,00", "HHHHSSSS");
        $anuncioAtual = $this->controller->buscarAnuncio($this->$id);
        $this->assertNotEquals($titulo,$anuncioAtual->getTitulo());
        $this->assertNotEquals($categoria,$anuncioAtual->getCategoria());
        $this->assertNotEquals($descricao,$anuncioAtual->getDescricao());
        $this->assertNotEquals($preco,$anuncioAtual->getPreco());

        $this->assertEquals("TV de LED FullHD", $this->$produto->getTitulo());
        $this->assertEquals("Televisores", $this->$produto->getCategoria());
        $this->assertEquals("Televisor Novo, Com Nota Fiscal", $this->$produto->getDescricao());
        $this->assertEquals("2.000,00", $this->$produto->getPreco());

    }

     /**
     * SC2 - Edição de anuncio de produto sem título:
     * Testa a edição de um anuncio de prouto sem o título.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioSemTitulo()
    {

        $this->controller->EditarAnuncio($this->produto, "", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "HHHHSSSS", "1");

    }

    /**
     * SC3 - Edição de anuncio de produto sem preco:
     * Testa a edição de um anuncio de produtono sem o preço.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioComPrecoInvalido()
    {
        $this->controller->EditarAnuncio($this->produto, "TV de Plasma", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "", "HHHHSSSS", "1");

    }

}