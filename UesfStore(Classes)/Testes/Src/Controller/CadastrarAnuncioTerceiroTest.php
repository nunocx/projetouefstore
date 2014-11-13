<?php

/**
* TC19-Cadastro de Anuncio de Terceiros:
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/EmailInvalidoException.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';

class ControllerUsuarioTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    
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
    }

    /**
     * SC1 - Cadastro anuncio de terceiros bem-sucedido:
     * Testa o cadastro de anuncios de terceiros no caso ideal.
     */
    public function testCadastrarAnuncioDeTerceirosBemSucedido()
    {
    	$this->controller->CadastrarAnuncioTerceiro("Netshoes", "http://www.netshoes.com.br","nsbanner.jpg");
    	$this->assertEquals("Netshoes", $this->usuario->getIdentificacao());
        $this->assertEquals("http://www.netshoes.com.br", $usuario->getLink());
    }

    /**
     * SC2 - Cadastro anuncio de terceiros Sem Identificação:
     * Testa o cadastro de anuncios de terceiros sem preencher o campo identificação.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testCadastrarAnuncioDeTerceirosSemIdentificacao()
    {
    	$this->controller->CadastrarAnuncioTerceiro("", "http://www.netshoes.com.br", "nsbanner.jpg");
    }

    /**
     * SC3 - Cadastro anuncio de terceiros Sem Identificação:
     * Testa o cadastro de anuncios de terceiros sem preencher o campo Link.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testCadastrarAnuncioDeTerceirosSemLink()
    {
    	$this->controller->CadastrarAnuncioTerceiro("Netshoes", "", "nsbanner.jpg");
    }

    /**
     * SC4 - Cadastro anuncio de terceiros Sem Imagem:
     * Testa o cadastro de anuncios de terceiros sem preencher o campo Imagem.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testCadastrarAnuncioDeTerceirosSemImagem()
    {
    	$this->controller->CadastrarAnuncioTerceiro("Netshoes", "http://www.netshoes.com.br", "");
    }
}