<?php

/**
* TC01-Cadastro de usuário:
*/
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/EmailInvalidoException.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/SenhaErradaException.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/UsuarioJaCadastradoException.php';
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Model/Anuncio.php';
require_once dirname(__FILE__).'/../../../Src/Model/Produto.php';
require_once dirname(__FILE__).'/../../../Src/Model/Servico.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';
require_once dirname(__FILE__).'/../../../Src/DAO/UsuarioDAO.php';
class CadastrarUsuarioTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;
    
    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->controller = new Controller();
    }
    
    /**
     * CW1-Cadastro bem sucedido:
     * Testa o cadastro de um usuário corretamente.
     */
    public function testeBemSucedido()
    {
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com",
        "M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
    }
    
    /**
     * CW2-E-mail Inváido:
     * Testa o cadastro de um usuario com o e-mail invalido.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeEmailInvalido()
    {
        $this->controller->cadastrarUsuario("João Filho", "",
        "M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
    }
    
    /**
     * CW3-Senha com número de caracteres inferior ao mínimo estabelecido:
     * Testa se a senha digitada possui o número mínimo de caracteres.
     * @expectedException CampoPreenchidoErradoException 
     */
    public function testeSenhaPequena()
    {
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com",
        "M", "07599992222","07599992222","a0","a0","fotoaqui","0");
    }
    
    /**
     * CW4-Confirmação inválida da senha:
     * Testa se o usuário confirmo a senha corretamente.
     * @expectedException CampoPreenchidoErradoException 
     */
    public function testeSenhaConfirmadaErrada()
    {
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com",
        "M", "07599992222","07599992222","abc1234","abc433","fotoaqui","0");
    }
    
    /**
     * CW5-Número de telefone inferior a 8 dígitos ou superior a 11 dígitos:
     * Testa se o número digitado pelo usuário possui um número de caracteres entre 8 e 11. 
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeNumeroTelefone()
    {
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com", 
        "M", "07592","07599992222222222","abc1234","abc1234","fotoaqui","0");
    }
    
    /**
     * CW6-Campos não preenchidos
     * Testa O cadastro com todos os campos em branco.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeCamposEmBranco()
    {
        $this->controller->cadastrarUsuario("", "","", "","","","","","");
    }
    
    /**
     * CW7-Usuário já cadastrado
     * Testa o cadastro de dois usuários com os mesmos dados.
     * @expectedException CampoPreenchidoErradoException
     */
    public function testeUsuarioDuplo()
    {
        $this->controller->cadastrarUsuario("Pedro", "pedro@hotmail.com",
        "M", "07511112222","07511112222","abcd1234","abcd1234","fotoaqui","0");
        $this->controller->cadastrarUsuario("Pedro", "pedro@hotmail.com",
        "M", "07511112222","07511112222","abcd1234","abcd1234","fotoaqui","0");
    }
}
