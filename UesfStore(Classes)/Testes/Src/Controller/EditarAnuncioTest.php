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
    protected $id;
    
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() 
    {
        $query = ' SHOW TABLES ';
        $query = mysql_query($query);
        while($dados = mysql_fetch_row($query))
        {
            $sql = ' DELETE FROM ' . $dados[0];
            mysql_query($sql);
        }
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com","M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
        $usuario = recuperarUsuario("joao@hotmail.com");
        $this->id = $usuario['id'];
        $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos", "1.100,00", "HHHHHHH","Televisor semi-novo, 2 meses de uso", $this->id,"2");
     //   $this->controller->cadastrarServico("Troca de lâmpadas", "Geral", "1.000.000,99", "HHHHHHH","Serviço rapido, facil e \"barato\" ", $this->id,"1");
    
        $this->controller->editarProduto("TV de LED Fu", "Televisores", "2.000,00", "SSSSSSS","Televisor Novo, Com Nota Fiscal",$this->id,"3");
        }

    /**
     * SC1 - Edição de anuncio de produto bem-sucedida:
     * Testa a edição de um anuncio de produto no caso ideal.
     */
    public function testEditarProdutoBemSucedido()
    {
        $this->anuncio = $this->controller->recuperarProduto($this->id);
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
        $this->controller->editarProduto("TV de LED Fu", "Televisores", "2.000,00", "SSSSSSS","Televisor Novo, Com Nota Fiscal",$this->id,"3");
        $this->anuncio = $this->controller->recuperarProduto($this->id);
        if($this->anuncio instanceof Anuncio)
        {
            $this->assertEquals($titulo,$this->anuncio->getTitulo());
            $this->assertEquals($categoria,$this->anuncio->getCategoria());
            $this->assertEquals($preco,$this->anuncio->getPreco());
            $this->assertEquals($fotoVideo,$this->anuncio->getFotoVideo());
            $this->assertEquals($descricao,$this->anuncio->getDescricao());
            $this->assertEquals($idUsuario,$this->anuncio->getIdUsuario());
            $this->assertEquals($quantidade,$this->anuncio->getQuantidade());
        }
    }
    
     /**
     * SC3 - Edição de anuncio de produto sem título:
     * Testa a edição de um anuncio de prouto sem o título.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioSemTitulo()
    {
        $this->controller->editarProduto("", "Televisores", "2.000,00", "SSSSSSS","Televisor Novo, Com Nota Fiscal",$this->id,"3");        
    }

    /**
     * SC4 - Edição de anuncio de produto sem preco:
     * Testa a edição de um anuncio de produtono sem o preço.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioComPrecoInvalido()
    {
        $this->controller->editarProduto("TV de LED FullHD", "Televisores", "", "SSSSSSS","Televisor Novo, Com Nota Fiscal",$this->id,"3");       
    }
    
    /**
     * SC5 - Edição de anuncio com descrição invalida:
     * Testa a edição de um anúncio sem a descrição.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEditarAnuncioComDescricaoInvalida()
    {
        $this->controller->editarProduto("TV de LED FullHD", "Televisores", "", "SSSSSSS","",$this->id,"3");
    }
}