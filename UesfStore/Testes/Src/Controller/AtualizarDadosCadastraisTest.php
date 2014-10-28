<?php

/**k
* TC01-Atulaizar Dados Cadastrais:
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';

class AtulaizarDadosCadastraisTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;

	protected function setUp() {
        $this->controller = new Controller();
        $this->usuario = $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com",
        "M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
    }

/**
     * SC1 - Alteraçao dos dados bem-sucedida
     * Testa a atualização dos dados cadastrais do usario.
     */
    public function testAtualizarDadosCadastraisBemSucedido()
    {

        $anterior = $this->$usuario->getNome();
        $usuario = $this->controller->atualizarDadosCadastrais($this->$usuario, "José Neto",
        "M", "07599992222","abc1234", "abc1234", "fotoaqui");
        $atual = $this->$usuario->getNome();
        
        $this->assertNotEquals($atual,$anterior);
        $this->assertEquals($atual,$this->$usuario->getNome());

        $anterior = $this->$usuario->getSexo();
        $usuario = $this->$controller->atualizarDadosCadastrais($this->$usuario, "José Neto"
        "F", "07599992222","abc1234", "abc1234 ","fotoaqui");
        $atual = $this->$usuario->getSexo();
        $this->assertNotEquals($atual,$anterior);
        $this->assertEquals($atual,this->$usuario->getSexo(););

        $anterior = $this->$usuario->getTelefone();
        $usuario = $this->controller->atualizarDadosCadastrais($this->$usuario, "José Neto", "jose@hotmail.com",
        "F", "07588885555","abc1234", "abc1234", "fotoaqui");
        $atual = $this->$usuario->getTelefone();
        $this->assertNotEquals($atual,$anterior);
        $this->assertEquals($atual,this->$usuario->getTelefone(););

        $anterior = $this->$usuario->getSenha();
        $usuario = $this->controller->atualizarDadosCadastrais($this->$usuario, "José Neto",
        "F", "07599992222","abc1234", "abc3333", "fotoaqui");
        $atual = $this->$usuario->getSenha();
        $this->assertNotEquals($atual,$anterior);
        $this->assertEquals($atual,this->$usuario->getSenha(););


    }

    /**
     * SC2 - Nome digitado inválido
     * Testa a atualização dos dados cadastrais com nome inválido.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testNomeAtualizadoInvalido()
    {

        $this->controller->atualizarDadosCadastrais($this->$usuario, "",
        "F", "07588885555","abc1234", "abc1234", "fotoaqui");
    }

    /**
     * SC3 - Senha digitada diferente da cadastrada
     * Testa a atualização dos dados cadastrais com senha atual digitada diferente da cadastrada.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testDeSenhaAtualDigitadaDiferenteDoCadastrada()
    {
        $this->controller->atualizarDadosCadastrais($this->$usuario, "",
        "F", "07588885555","abc3333", "abc5555", "fotoaqui");
    }

    /**
     * SC3 - Nova Senha com quantidade de caracter insuficiente
     * Testa a atualização dos dados cadastrais com senha possuindo quantidade insuficientes de caracter.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testNovaSenhaComQuantidadeInsuficienteDeCaracter()
    {

        $this->controller->atualizarDadosCadastrais($this->$usuario, "",
        "F", "07588885555","abc1234", "abc1", "fotoaqui");
    }

    /**
     * SC4 - Telefone digitado Inválido
     * Testa a atualização dos dados cadastrais com telefone digitado tendo um número de caracteres inferior a 8 e superior a 11.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testTelefoneInvalido()
    {

        $this->controller->atualizarDadosCadastrais($this->$usuario, "",
        "F", "075888","abc1234", "abc1", "fotoaqui");
    }
}