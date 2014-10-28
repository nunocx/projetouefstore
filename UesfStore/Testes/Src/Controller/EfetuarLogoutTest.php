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
        $this->controller->cadastrarUsuario("Pedro", "pedro@hotmail.com",
            "M", "07511112222","07511112222","abc1234","abc1234","fotoaqui","0");


    }

    /**
     * SC1 - Logout bem-sucedido:
     * Testa o Logout de um usuário do sistema corretamente.
     */
    public function testEfetuarLogoutBemSucedido()
    {
    	$usuario = $this->controller->buscarUsaurio("pedro@hotmail.com")

        $this->controller->EfetuarLogout($usuario);

    }

}