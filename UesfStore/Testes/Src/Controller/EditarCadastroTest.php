<?php

/**
* TC01-Atulaizar Dados Cadastrais:
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';

class EditarCadastroTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;
    protected $email;

    protected function setUp() {
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com",
        "M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
        $this->email = "joao@hotmail.com";
    }

    /**
     * SC1 - Alteraçao dos dados bem-sucedida
     * Testa a atualização dos dados cadastrais do usario.
     */
    public function testAtualizarDadosCadastraisBemSucedido()
    {

        $this->usuario = $this->controller->recuperarUsuario($this->email);
        if($usuario instanceof Usuario)
        {    
            $nome = $this->usuario->getNome();
            $sexo = $this->usuario->getSexo();
            $telefone = $this->usuario->getTelefone();
            $Senha = $this->usuario->getSenha();
        }
        $this->controller->editarCadastro($this->email, "José Neto",
        "F", "07588885555","abc3333", "abc3333", "fotoaqui");

        $usuarioAtual = $this->controller->recuperarUsuario("joao@hotmail.com");
        if($usuarioAtual instanceof Usuario)
        {
            $this->assertNotEquals($nome,$usuarioAtual->getNome());
            $this->assertNotEquals($sexo,$usuarioAtual->getSexo());
            $this->assertNotEquals($telefone,$usuarioAtual->getTelefone());
            $this->assertNotEquals($senha,$usuarioAtual->getSenha());

            $this->assertEquals("José Neto",$usuarioAtual->getNome());
            $this->assertEquals("F",$usuarioAtual->getSexo());
            $this->assertEquals("07588885555",$usuarioAtual->getelefone());
            $this->assertEquals("abc3333",$usuarioAtual->getNovaSenha());
        }
    }   
     
    /**
     * SC2 - Nome digitado inválido
     * Testa a atualização dos dados cadastrais com nome inválido.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testNomeAtualizadoInvalido()
    {

        $this->controller->editarCadastro($this->email, "",
        "F", "07588885555","abc1234", "abc1234", "fotoaqui");
    }

    /**
     * SC3 - Senha digitada diferente da cadastrada
     * Testa a atualização dos dados cadastrais com senha atual digitada diferente da cadastrada.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testDeSenhaAtualDigitadaDiferenteDoCadastrada()
    {
        $this->controller->editarCadastro($this->email, "José Neto",
        "F", "07588885555","abc3333", "abc5555", "fotoaqui");
    }

    /**
     * SC3 - Nova Senha com quantidade de caracter insuficiente
     * Testa a atualização dos dados cadastrais com senha possuindo quantidade insuficientes de caracter.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testNovaSenhaComQuantidadeInsuficienteDeCaracter()
    {

        $this->controller->editarCadastro($this->email, "José Neto",
        "F", "07588885555","abc1234", "abc", "fotoaqui");
    }

    /**
     * SC4 - Telefone digitado Inválido
     * Testa a atualização dos dados cadastrais com telefone digitado tendo um número de caracteres inferior a 8 e superior a 11.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testTelefoneInvalido()
    {

        $this->controller->editarCadastro($this->email, "José Neto",
        "F", "075888","abc1234", "abc1", "fotoaqui");
    }
}