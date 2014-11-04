<?php

/**
* TC13-Efetuar Login:
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';

class EfetuarLoginTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("Pedro", "pedro@hotmail.com",
            "M", "07511112222","07511112222","abc1234","abc1234","fotoaqui","0");


    }

    /**
     * SC1 - Login bem-sucedido:
     * Testa o Login de um usuário no sistema corretamente.
     */
    public function testEfetuarLoginBemSucedido()
    {

        $this->controller->login("pedro@hotmail.com", "abc1234");

    }
    /**
     * SC2 - Usuario nao cadastrado:
     * Testa o a tentativa de login de um usuario não cadastrado.
     *@expectedException UsuarioNaoCadastradoException
     */
    public function testEfetuarLoginUsuarioNaoEncontrado()
    {

        $login = $this->controller->login("jose@gmail.com", "abc1234");

    }

    /**
     * SC3 - Login com campos em branco:
     * Testa o a tentativa de login de um usuario sem preencher os campos.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testEfetuarLoginCamposEmBranco()
    {
    	$this->controller->login("", "");
    }
}