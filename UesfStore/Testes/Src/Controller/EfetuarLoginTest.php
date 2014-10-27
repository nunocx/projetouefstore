<?php

/**
* TC13-Efetuar Login:
*/
require_once dirname(__FILE__).'/../../PBLTestes/User.php';
require_once dirname(__FILE__).'/../../PBLTestes/Controller.php';
require_once dirname(__FILE__).'/../../PBLTestes/Usuario.php';
require_once dirname(__FILE__).'/../../PBLTestes/CampoPreenchidoErradoException.php';

class ControllerUsuarioTest extends PHPUnit_Framework_TestCase {

    protected $controllerUsuario;
    protected $usuario;
    
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
        $this->usuario = $this->controller->cadastrarUsuario("Pedro", "pedro@hotmail.com",
            "M", "07511112222","07511112222","abc1234","abc1234","fotoaqui","0");


    }

    /**
     * SC1 - Login bem-sucedido:
     * Testa o Login de um usuário no sistema corretamente.
     */
    public function testEfetuarLoginBemSucedido()
    {
    	$login = $this->controller->EfetuarLogin("pedro@hotmail.com", "abc1234");

    	$this->assertTrue($login);
    }
    /**
     * SC2 - Usuario nao cadastrado:
     * Testa o a tentativa de login de um usuario não cadastrado.
     */
    public function testEfetuarLoginUsuarioNaoEncontrado()
    {
    	$login = $this->controller->EfetuarLogin("jose@gmail.com", "abc1234");

    	$this->assertFalse($login, "Usuario não Cadastrado");
    }

    /**
     * SC3 - Login com campos em branco:
     * Testa o a tentativa de login de um usuario sem preencher os campos.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEfetuarLoginCamposEmBranco()
    {
    	$this->controller->EfetuarLogin("", "");
    }
}