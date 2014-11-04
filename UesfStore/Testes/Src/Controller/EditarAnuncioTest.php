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
    protected $anuncio;
    protected $idProduto;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com",
                "M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
        $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos", "1.100,00", "HHHHHHH","Televisor semi-novo, 2 meses de uso", "1","2");
        $this->controller->cadastrarServico("Troca de lâmpadas", "Geral", "1.000.000,99", "HHHHHHH","Serviço rapido, facil e \"barato\" ", "1","2");
    
    }

    /**
     * SC1 - Edição de anuncio de produto bem-sucedida:
     * Testa a edição de um anuncio de produto no caso ideal.
     */
    public function testEditarProdutoBemSucedido()
    {
        $this->anuncio = $this->controller->recuperarAnuncio("1");
        if($this->anuncio instanceof Anuncio)
        {   
            $titulo = $this->anuncio->getTitulo();
            $categoria = $this->anuncio->getCategoria();
            $preco = $this->anuncio->getPreco();
            $fotoVideo = $this->anuncio->getFotoVideo();
            $descricao = $this->anuncio->getDescricao();
            $idUsuario = $this->anuncio->getIdUsuario();//TODO:PQ ñ reconhece esse metodo?
            $quantidade = $this->anuncio->getQuantidade();
        }
        $this->controller->editarProduto("TV de LED FullHD", "Televisores", "2.000,00", "SSSSSSS","Televisor Novo, Com Nota Fiscal","1","3");
        $this->anuncio = $this->controller->recuperarAnuncio("1");
        if($this->anuncio instanceof Anuncio)
        {
            $this->assertNotEquals($titulo,$this->anuncio->getTitulo());
            $this->assertNotEquals($categoria,$this->anuncio->getCategoria());
            $this->assertNotEquals($preco,$this->anuncio->getPreco());
            $this->assertNotEquals($fotoVideo,$this->anuncio->getFotoVideo());
            $this->assertNotEquals($descricao,$this->anuncio->getDescricao());
            $this->assertEquals($idUsuario,$this->anuncio->getIdUsuario());
            $this->assertNotEquals($quantidade,$this->anuncio->getQuantidade());

            $this->assertEquals("TV de LED FullHD", $this->produto->getTitulo());
            $this->assertEquals("Televisores", $this->produto->getCategoria());
            $this->assertEquals("2.000,00", $this->produto->getPreco());
            $this->assertEquals("SSSSSSS", $this->produto->getFotoVideo());
            $this->assertEquals("Televisor Novo, Com Nota Fiscal", $this->produto->getDescricao());
            $this->assertEquals("1", $this->produto->getIdUsuario());
            $this->assertEquals("3", $this->produto->getQuantidade());
        }
    }
    
    /**
     * SC2 - Edição de anuncio de serviço bem-sucedida:
     * Testa a edição de um anuncio de serviço no caso ideal.
     */
    public function testEditarServicoBemSucedido()
    {
        $this->anuncio = $this->controller->recuperarAnuncio("1");
        if($this->anuncio instanceof Anuncio)
        {   
            $titulo = $this->anuncio->getTitulo();
            $categoria = $this->anuncio->getCategoria();
            $preco = $this->anuncio->getPreco();
            $fotoVideo = $this->anuncio->getFotoVideo();
            $descricao = $this->anuncio->getDescricao();
            $idUsuario = $this->anuncio->getIdUsuario();//TODO:PQ ñ reconhece esse metodo?
            $quantidade = $this->anuncio->getQuantidade();
        }
        $this->controller->editarProduto("TV de LED FullHD", "Televisores", "2.000,00", "SSSSSSS","Televisor Novo, Com Nota Fiscal","1","3");
        $this->anuncio = $this->controller->recuperarAnuncio("1");
        if($this->anuncio instanceof Anuncio)
        {
            $this->assertNotEquals($titulo,$this->anuncio->getTitulo());
            $this->assertNotEquals($categoria,$this->anuncio->getCategoria());
            $this->assertNotEquals($preco,$this->anuncio->getPreco());
            $this->assertNotEquals($fotoVideo,$this->anuncio->getFotoVideo());
            $this->assertNotEquals($descricao,$this->anuncio->getDescricao());
            $this->assertEquals($idUsuario,$this->anuncio->getIdUsuario());
            $this->assertNotEquals($quantidade,$this->anuncio->getQuantidade());

            $this->assertEquals("TV de LED FullHD", $this->produto->getTitulo());
            $this->assertEquals("Televisores", $this->produto->getCategoria());
            $this->assertEquals("2.000,00", $this->produto->getPreco());
            $this->assertEquals("SSSSSSS", $this->produto->getFotoVideo());
            $this->assertEquals("Televisor Novo, Com Nota Fiscal", $this->produto->getDescricao());
            $this->assertEquals("1", $this->produto->getIdUsuario());
            $this->assertEquals("3", $this->produto->getQuantidade());
        }
    }

     /**
     * SC2 - Edição de anuncio de produto sem título:
     * Testa a edição de um anuncio de prouto sem o título.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioSemTitulo()
    {

        $this->controller->editarProduto("", "Televisores", "2.000,00", "SSSSSSS","Televisor Novo, Com Nota Fiscal","1","3");
        
    }

    /**
     * SC3 - Edição de anuncio de produto sem preco:
     * Testa a edição de um anuncio de produtono sem o preço.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioComPrecoInvalido()
    {
        $this->controller->editarProduto("TV de LED FullHD", "Televisores", "", "SSSSSSS","Televisor Novo, Com Nota Fiscal","1","3");
        
    }
    
    /**
     * SC4 - Edição de anuncio com descrição invalida:
     * Testa a edição de um anúncio sem a descrição.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioComDescricaoInvalida()
    {
        $this->controller->editarProduto("TV de LED FullHD", "Televisores", "", "SSSSSSS","","1","3");
        
    }

}