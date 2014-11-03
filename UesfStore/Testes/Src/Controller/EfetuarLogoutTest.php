<?php

/**
* TC13-Efetuar Login:
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';

class ControllerUsuarioTest extends PHPUnit_Framework_TestCase {

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
     * SC1 - Logout bem-sucedido:
     * Testa o Logout de um usuário do sistema corretamente.
     */
    public function testEfetuarLogoutBemSucedido()
    {
    	$usuario = $this->controller->buscarUsuario("pedro@hotmail.com");

        $this->controller->logout($usuario);

    }

}