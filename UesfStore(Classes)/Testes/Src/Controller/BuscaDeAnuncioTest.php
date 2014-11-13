<?php
/**
 * TC02-Busca de anúncio
 */
require_once dirname(__FILE__) . '/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__) . '/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';
require_once dirname(__FILE__) . '/../../../Src/Model/User.php';
require_once dirname(__FILE__) . '/../../../Src/Model/Anuncio.php';
require_once dirname(__FILE__) . '/../../../Src/Model/Produto.php';
require_once dirname(__FILE__) . '/../../../Src/Model/Servico.php';
require_once dirname(__FILE__) . '/../../../Src/Model/Usuario.php';

class BuscaDeAnuncioTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $celularLG;
    protected $anuncio;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() 
    {
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com","M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
        $this->controller->cadastrarProduto("Celular LG", "Celulares e telefone", "299,99", "HDHDUSHSUDHSUF", "Em bom estado", "1","1");
    }

    /**
     * CW1-Busca de anúncio:
     * Testa a busca de um anúncio com todos os dados.
     */
    public function testeBuscaBemSucedida() 
    {
        $this->anuncio = $this->controller->buscarAnuncio("Celular LG", "Celulares e telefone", "Em bom estado");
        if ($this->anuncio instanceof Anuncio) 
        {
            $this->assertEquals("Celular LG", $this->anuncio->getTitulo());
            $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
            $this->assertEquals("299,99", $this->anuncio->getPreco());
            $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
            $this->assertEquals("Em bom estado", $this->anuncio->getDescricao());
            $this->assertEquals("1", $this->anuncio->getIdUsuario());
            $this->assertEquals("1", $this->anuncio->getQuantidade());
        }
        else
        {
            $this->fail();
        }
    }

    /**
     * CW2-Busca por nome:
     * Testa a busca de um anúncio apenas pelo nome.
     */
    public function testeBuscaPorNome() 
    {
        $this->anuncio = $this->controller->buscarAnuncio("Celular LG", "", "");
        if ($this->anuncio instanceof Anuncio) 
        {
            $this->assertEquals("Celular LG", $this->anuncio->getTitulo());
            $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
            $this->assertEquals("299,99", $this->anuncio->getPreco());
            $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
            $this->assertEquals("Em bom estado", $this->anuncio->getDescricao());
            $this->assertEquals("1", $this->anuncio->getIdUsuario());
            $this->assertEquals("1", $this->anuncio->getQuantidade());
        }
        else
        {
            $this->fail();
        }
    }

    /**
     * CW3-Busca por característica:
     * Testa a busca de um anúncio pela descrição.
     */
    public function testeBuscaPorCaracteristica() 
    {
        $this->anuncio = $this->controller->buscarAnuncio("", "", "Usado");
        if ($this->anuncio instanceof Anuncio) 
        {
            $this->assertEquals("Celular LG", $this->anuncio->getTitulo());
            $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
            $this->assertEquals("299,99", $this->anuncio->getPreco());
            $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
            $this->assertEquals("Em bom estado", $this->anuncio->getDescricao());
            $this->assertEquals("1", $this->anuncio->getIdUsuario());
            $this->assertEquals("1", $this->anuncio->getQuantidade());
        }
        else
        {
            $this->fail();
        }
    }

    /**
     * CW4-Busca por categoria:
     * Testa a busca de um anúncio por categoria.
     */
    public function testeBuscaPorCategoria() 
    {
        $this->anuncio = $this->controller->buscarAnuncio("", "Celulares e telefone", "");
        if ($this->anuncio instanceof Anuncio) 
        {
            $this->assertEquals("Celular LG", $this->anuncio->getTitulo());
            $this->assertEquals("Celulares e telefone", $this->anuncio->getCategoria());
            $this->assertEquals("299,99", $this->anuncio->getPreco());
            $this->assertEquals("HDHDUSHSUDHSUF", $this->anuncio->getFotoVideo());
            $this->assertEquals("Em bom estado", $this->anuncio->getDescricao());
            $this->assertEquals("1", $this->anuncio->getIdUsuario());
            $this->assertEquals("1", $this->anuncio->getQuantidade());
        }
        else
        {
            $this->fail();
        }
    }

    /**
     * CW5-Falta de informação para a busca:
     * Testa a busca de um anúncio com todos os campos em branco.
     * @expectedException CamposPreenchidosErrados
     */
    public function testeBuscaSemInformação() 
    {
        $this->anuncio = $this->controller->buscarAnuncio("", "", "");
    }

}
?>