<?php

/**
* TC05-Cadastro de Servico
*/
require_once dirname(__FILE__).'/../../PBLTestes/User.php';
require_once dirname(__FILE__).'/../../PBLTestes/Controller.php';
require_once dirname(__FILE__).'/../../PBLTestes/Usuario.php';
require_once dirname(__FILE__).'/../../PBLTestes/Exception/CampoPreenchidoErradoException.php';
class CadastroDeServicoTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;
    
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
    }
    
    /**
     * CW1-Cadastro de serviço bem sucedido:
     * Testa o cadastro de um serviço bem sucedido.
     */
    public function testeCadastroServicoCorreto()
    {
        $this->controller->cadastrarServico("Lava jato JC", "Serviço em geral", 
                "Lavamos e polimos seu carro", "80,00", "HHHHWWWWW", "1");
    }
    
    /**
     * CW2-Nome não informado
     * Testa o cadastro de um servico sem informar nome.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeServicoSemNome()
    {
        $this->controller->cadastrarServico("", "Serviço em geral", 
                "Lavamos e polimos seu carro", "80,00", "HHHHWWWWW", "1");
    }
    
    /**
     * CW3-Categoria não informada:
     * Testa o cadastro de serviço sem informar a categoria.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroDeServicoSemCategoria()
    {
        $this->controller->cadastrarServico("Lava jato JC", "", 
                "Lavamos e polimos seu carro", "80,00", "HHHHWWWWW", "1");
    }
    
    /**
     * CW4-Descricao não informada:
     * Testa o cadastro de um serviço sem informar a descrição
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroServicoSemDescricao()
    {
            $this->controller->cadastrarServico("Lava jato JC", "Serviço em geral", "", "80,00", "HHHHWWWWW", "1"); 
    }
    
    /**
     * CW5-Nenhum dado preenchido
     * Testa o cadastro de um serviço com todos os campos em branco.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCadastroServicoEmBranco()
    {
        $this->controller->cadastrarServico("", "", "", "", "", "");
    }
}
