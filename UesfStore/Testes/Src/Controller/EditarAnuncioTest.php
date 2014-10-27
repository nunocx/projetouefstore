<?php

/**
* TC12 - Editar Anuncio
*/
require_once dirname(__FILE__).'/../../PBLTestes/User.php';
require_once dirname(__FILE__).'/../../PBLTestes/Controller.php';
require_once dirname(__FILE__).'/../../PBLTestes/Produto.php';
require_once dirname(__FILE__).'/../../PBLTestes/Servico.php';
require_once dirname(__FILE__).'/../../PBLTestes/CampoPreenchidoErradoException.php';
class EditarAnuncioTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $produto;
    protected $servico;
    
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
        $this->produto = $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "HHHHSSSS", "1");
        $this->servico = $this->controller->cadastrarServico("Lava jato JC", "Serviço em geral", 
                "Lavamos e polimos seu carro", "A combinar", "HHHHWWWWW");
    }

    /**
     * SC1 - Edição de anuncio de produto bem-sucedida:
     * Testa a edição de um anuncio de produto no caso ideal.
     */
    public function testEditarAnuncioDeProdutoBemSucedido()
    {    

        $anterior = $this->$produto->getNome();
        $produto = $this->controller->EditarAnuncioProduto($this->$produto, "TV de LED FullHD", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "1");
        $atual = $this->$produto->getNome();
        this->assertNotEquals($atual,$anterior);
        this->assertEquals($atual,this->$produto->getNome(););

        $anterior = $this->$produto->getCategoria();
        $produto = $this->controller->EditarAnuncioProduto($this->$produto, "TV de LED FullHD", "Televisores",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "1");
        $atual = $this->$produto->getCategoria();
        this->assertNotEquals($atual,$anterior);
        this->assertEquals($atual,this->$produto->getCategoria(););

        $anterior = $this->$produto->getDescricao();
        $produto = $this->controller->EditarAnuncioProduto($this->$produto, "TV de LED FullHD", "Televisores",
                "Televisor Novo, Com Nota Fiscal", "1.100,00", "1");
        $atual = $this->$produto->getDescricao();
        this->assertNotEquals($atual,$anterior);
        this->assertEquals($atual,this->$produto->getDescricao(););

        $anterior = $this->$produto->getPreco();
        $produto = $this->controller->EditarAnuncioProduto($this->$produto, "TV de LED FullHD", "Televisores",
                "Televisor Novo, Com Nota Fiscal", "2.000,00", "1");
        $atual = $this->$produto->getPreco();
        this->assertNotEquals($atual,$anterior);
        this->assertEquals($atual,this->$produto->getPreco(););

    }

     /**
     * SC2 - Edição de anuncio de produto sem título:
     * Testa a edição de um anuncio de prouto sem o título.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioDeProdutoSemTitulo()
    {

        $this->controller->EditarAnuncioProduto($this->$produto, "", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "HHHHSSSS", "1");

    }

    /**
     * SC3 - Edição de anuncio de produto sem preco:
     * Testa a edição de um anuncio de produtono sem o preço.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioDeProdutoComPrecoInvalido()
    {
        $this->controller->EditarAnuncioProduto($this->$produto, "TV de Plasma", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "", "HHHHSSSS", "1");

    }

    /**
     * SC4 - Edição de anuncio de serviço bem-sucedida:
     * Testa a edição de um anuncio de serviço no caso ideal.
     */
    public function testEditarAnuncioDeServicoBemSucedido()
    {

        $anterior = $this->$servico->getNome();
        $servico = $this->controller->EditarAnuncioServico($this->$servico, "Faz Tudo", "Serviço em geral", 
                "Lavamos e polimos seu carro", "A combinar", "HHHHWWWWW");
        $atual = $this->$servico->getNome();
        this->assertNotEquals($atual,$anterior);
        this->assertEquals($atual,this->$servico->getNome(););

        $anteriorCategoria = $this->$servico->getCategoria();
        $anteriorDescricao = $this->$servico->getDescricao();
        $servico = $this->controller->EditarAnuncioServico($this->$servico, "Professor Particular", "Serviço em geral", 
                "Aulas de Calculo", "A combinar", "HHHHWWWWW");
        $atualCategoria = $this->$servico->getCategoria();
        $atualDescricao = $this->$servico->getDescricao();
        this->assertNotEquals($atualCategoria,$anteriorCategoria);
        this->assertNotEquals($atualDescricao,$anteriorDescricao);
        this->assertEquals($atual,this->$servico->getCategoria(););
        this->assertEquals($atual,this->$servico->getDescricao(););
    }

    /**
     * SC5 - Edição de anuncio de serviço sem título:
     * Testa a edição de um anuncio de serviço sem o título.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioDeServicoSemTitulo()
    {
    
        $this->controller->EditarAnuncioServico($this->$servico, "", "Serviço em geral", 
                "Lavamos e polimos seu carro", "A combinar", "HHHHWWWWW");
    }

    /**
     * SC6 - Edição de anuncio de serviço sem descrição:
     * Testa a edição de um anuncio de serviço sem descrição.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioDeServicoSemDescricao()
    {
    
        $this->controller->EditarAnuncioServico($this->$servico, "Lava jato JC", "Serviço em geral", 
                "", "A combinar", "HHHHWWWWW");
    }

}