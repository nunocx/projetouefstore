<?php

/**
* TC02-Busca de anúncio
*/
require_once dirname(__FILE__).'/../../PBLTestes/Usuario.php';
require_once dirname(__FILE__).'/../../PBLTestes/Controller.php';
require_once dirname(__FILE__).'/../../PBLTestes/CampoPreenchidoErradoException.php';
class BuscaDeUsuarioTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() 
    {
        $this->controller = new Controller();
        $this->usuario = $this->controller->cadastrarUsuario("Joao Filho", "joaofilho@hotmail.com",
                "M", "07532231345", "07199034567", "joao1234", "joao1234", "joao.jpeg", "0");
    }
    
    /**
     * CW1-Busca de uauário:
     * Testa a busca de um uauário com todos os dados.
     */
    public function testeBuscaBemSucedida()
    {
        
        $this->usuario = $this->controller->buscarUsuario("Joao Filho");
        $this->assertEquals("Joao Filho", $this->usuario->getNome());
        $this->assertEquals("joaofilho@hotmail.com", $this->usuario->getEmail());
        $this->assertEquals("M", $this->usuario->getSexo());
        $this->assertEquals("07532231345", $this->usuario->getTelefone());
        $this->assertEquals("07199034567", $this->usuario->getCelular());
        $this->assertEquals("joao1234", $this->usuario->getSenha());
        $this->assertEquals("joao.jpeg", $this->usuario->getFoto());
        $this->assertEquals("0", $this->usuario->getStatus());
           
    }
    
    /**
     * CW2-Busca de um usuário não cadastrado:
     * Testa a busca de um usuário não cadastrado.
     * @expectedException CamposNãoEncontradoException
     */
    public function testeBuscaDeUsuarioNaoCadastrado()
    {
        $this->usuario = $this->controller->buscarUsuario("Jota Carlos");
    }
    
    /**
     * CW3-Falta de informação para a busca:
     * Testa a busca de um usuário com todos os campos em branco.
     * @expectedException CamposPreenchidosErradosException
     */
    public function testeBuscaSemInformação()
    {        
        $this->usuario = $this->controller->buscarUsuario("");
    }
}
