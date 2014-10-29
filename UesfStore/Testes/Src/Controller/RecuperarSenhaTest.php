<?php

/**
* TC11-Recuperar Senha:
*/
require_once dirname(__FILE__).'/../../PBLTestes/User.php';
require_once dirname(__FILE__).'/../../PBLTestes/Controller.php';
require_once dirname(__FILE__).'/../../PBLTestes/Usuario.php';
require_once dirname(__FILE__).'/../../PBLTestes/UsuarioNaoCadastradoException.php';
require_once dirname(__FILE__).'/../../PBLTestes/CampoPreenchidoErradoException.php';

class RecuperarSenhaTest extends PHPUnit_Framework_TestCase 
{
    protected $controller;
    protected $usuario;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
            $this->controller = new Controller();
            $this->controller->cadastrarUsuario("Pedro", "pedro@hotmail.com",
            "M", "07511112222","07511112222","abcd1234","abcd1234","fotoaqui","0");
    }

    /**
     * SC1  - Envio de senha bem sucedido
     */
    public function senhaRecuperada()
    {
        $this->controller->recuperarSenha("pedro@hotmail.com");
    }

    /**
     * SC2 - Usuário não cadastrado no sistema
     *@expectedException UsuarioNaoCadastradoException
     */
    public function emailNaoCadastrado()
    {
        $this->controller->recuperarSenha("p@hotmail.com");
    }

    /**
     * SC3 - Usuário não preenche os campos
     *@expectedException CampoPreenchidoErradoException
     */
    public function emailNaoDigitado()
    {
        $this->controller->recuperarSenha("");
    }
}
?>