<?php

/**
* TC05-Cadastro de Servico
*/
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';
class CadastroDeServicoTest extends PHPUnit_Framework_TestCase {

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
    
    /**
     * CW1-Cadastro de serviço bem sucedido:
     * Testa o cadastro de um serviço bem sucedido.
     */
    public function testeCadastroServicoCorreto()
    {
        $this->controller->cadastrarServico("Lava jato JC", "Serviço em geral", "80,00", "HHHHWWWWW", "Lavamos e polimos seu carro", $this->id,"0");
    }
    
    /**
     * CW2-Nome não informado
     * Testa o cadastro de um servico sem informar nome.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeServicoSemNome()
    {
        $this->controller->cadastrarServico("", "Serviço em geral", "80,00", "HHHHWWWWW", "Lavamos e polimos seu carro", $this->id,"0");
    }
    
    /**
     * CW3-Categoria não informada:
     * Testa o cadastro de serviço sem informar a categoria.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeServicoSemCategoria()
    {
        $this->controller->cadastrarServico("Lava jato JC", "", "80,00", "HHHHWWWWW", "Lavamos e polimos seu carro", $this->id,"0");
    }
    
    /**
     * CW4-Descricao não informada:
     * Testa o cadastro de um serviço sem informar a descrição
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroServicoSemDescricao()
    {
            $this->controller->cadastrarServico("Lava jato JC", "Serviço em geral","80,00", "HHHHWWWWW","", $this->id, "0"); 
    }
    
    /**
     * CW5-Nenhum dado preenchido
     * Testa o cadastro de um serviço com todos os campos em branco.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroServicoEmBranco()
    {
        $this->controller->cadastrarServico("", "", "", "", "", $this->id,"");
    }
}
