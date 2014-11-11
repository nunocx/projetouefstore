<?php

/**
* TC04-Cadastro de produto
*/
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';
require_once dirname(__FILE__).'/../../../Src/Model/Anuncio.php';
require_once dirname(__FILE__).'/../../../Src/Model/Produto.php';
require_once dirname(__FILE__).'/../../../Src/Model/Servico.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';
class CadastrarDeProdutoTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;
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
    }
    
    protected function tearDown() 
    {
        $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos", "1.100,00","HHHHSSSS","Televisor semi-novo, 2 meses de uso", $this->id,"2");
    }
    
    /**
     * CW1-Cadastro de produto bem sucedido:
     * Testa o cadastro de produtos no caso ideal.
     */
    public function testeCadastroDeProduto()
    {    
        $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos", "1.100,00","HHHHSSSS","Televisor semi-novo, 2 meses de uso", $this->id,"2");
    }
    /**
     * CW2-Categoria não preenchida:
     * Testa o cadastro de um produto sem a categoria.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeProdutoSemCategoria()
    {
        $this->controller->cadastrarProduto("TV de Plasma", "", "Televisor semi-novo, 2 meses de uso", "1.100,00", "HHHHSSSS", $this->id,"2");
    }
    
    /**
     * CW3-Preço não preenchido:
     * Testa o cadastro de um produto sem o preço.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeProdutoSemPreco()
    {
        $this->controller->cadastrarProduto("TV de Plasma", "Eletrônicos", "",
                "Televisor semi-novo, 2 meses de uso", "HHHHSSSS", $this->id,"2");
    }
    
    /**
     * CW4-Nenhum dado preenchido
     * Testa o cadastro de um produto com todos os campos em branco.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeProdutoSemInformação()
    {
        $this->controller->cadastrarProduto("", "", "", "", "",$this->id,"");
    }
    
    /**
     * CW5-Nome não preenchido
     * Testa o cadastro de um produto sem o nome do produto.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeProdutoSemNome()
    {
        $this->controller->cadastrarProduto("", "Eletrônicos",
                "Televisor semi-novo, 2 meses de uso", "1.100,00", "HHHHSSSS", $this->id,"2");
    }
}
    