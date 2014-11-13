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
    protected function setUp() 
    {
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com","M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
        $this->controller->login("pedro@hotmail.com","abc1234");
    }
    //TODO: E se o usuário sair sem fazer o logout?
    /**
     * SC1 - Logout bem-sucedido:
     * Testa o Logout de um usuário do sistema corretamente.
     */
    public function testEfetuarLogoutBemSucedido()
    {
        $this->controller->logout("pedro@hotmail.com");
    }

}